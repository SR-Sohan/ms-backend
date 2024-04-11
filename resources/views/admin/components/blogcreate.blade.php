<!-- Modal -->
<div class="modal fade modal-lg" id="blogModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Blog</h1>
          <button onclick="formReset()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="form">
            <input class="d-none" type="number" name="blog_id" id="blog_id">
            <input class="d-none" type="text" name="file_path" id="file_path">
            <div class="mb-3">
                <label for="name">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>                        
            <div class="mb-3">
              <img class="w-25" src="{{asset('assets/images/default.jpg')}}" alt="" id="preview">
              <br>
              <br>
              <input oninput="preview.src=window.URL.createObjectURL(this.files[0])" type="file" name="image" id="image">
            </div>

            <div class="mb-3">
                <textarea wdith=100% name="description" id="description" cols="30" rows="10"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button id="closeBtn" onclick="formReset()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="submitBtn" onclick="handleSubmit()" type="button" class="btn btn-primary">Add Blog</button>
        </div>
      </div>
    </div>
  </div>

  <script>

    $(document).ready(function() {
    $('#description').summernote({
        height: 400,
        toolbar: [
            
                ['style', ['style']],
                ['font', ['bold', 'underline','italic', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['height', ['height']],
                ['custom', ['customModal']] ,
                ['view', ['fullscreen', 'codeview', 'help']]
            
            ],
    });
    });

    // form reset
    function formReset(){
      $("#form")[0].reset();
      $("#submitBtn").html("Add Blog")
      $("#description").summernote("code","")
      $("#preview").attr('src', '{{ asset('assets/images/default.jpg') }}');
    }

    // Submit Form
    async function handleSubmit(){
      let blog_id = $("#blog_id").val();
      let file_path = $("#file_path").val();
      let title = $("#title").val();
      let description = $("#description").val();
      let image = $('#image')[0].files[0]

       if(title === ""){
        errorToast("Title is required")
      }else if(description === ""){
        errorToast("description is required")
      }else{

        let formData = new FormData();
        formData.append("blog_id",blog_id)
        formData.append("file_path",file_path)
        formData.append("title",title)
        formData.append("description",description)
        formData.append("image",image)

        // console.log(formData);

        let config = {
                headers: {
                    "Content-Type": "multipart/form-data", 
                },
            }
         
        showLoader();
        let res = await axios.post("/admin/blog-create-update",formData,config)
        hideLoader();

        if(res.status === 200 && res.data["status"] === "success"){
          document.getElementById("closeBtn").click();
          formReset();
          await getData();
          successToast(res.data["message"])
        }else{
          errorToast(res.data["message"])
        }

      }


    }

  </script>