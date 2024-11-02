<!-- Modal -->
<div class="modal fade modal-xl" id="blogModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <label for="is_social">Is Social</label>
                <select name="is_social" id="is_social" class="form-select">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
            </div>      
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

            <div id="textArea" class="mb-3">
                <textarea wdith=100% name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div id="socialArea" class="mb-3 d-none">
              <label for="social_link">Socail LInk</label>
              <input type="text" name="social_link" id="social_link" class="form-control">
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

      $('#is_social').change(function() {
            var selectedValue = $(this).val();

            if (selectedValue == '1') {
                $('#socialArea').removeClass('d-none'); 
                $('#textArea').addClass('d-none');   // Hide field 2
            } else if (selectedValue == '0') {
                $('#socialArea').addClass('d-none');   // Hide field 1
                $('#textArea').removeClass('d-none'); // Show field 2
            } else {
                // If no valid selection, hide both fields
                $('#textArea').addClass('d-none');
                $('#socialArea').addClass('d-none');
            }
        });

    $('#description').summernote({
        height: 550,
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
      let is_social = $("#is_social").val();
      let social_link = $("#social_link").val();
      let title = $("#title").val();
      let description = $("#description").val();
      let image = $('#image')[0].files[0]


      console.log(is_social,social_link);
      

       if(title === ""){
        errorToast("Title is required")
      }else{

        let formData = new FormData();
        formData.append("blog_id",blog_id)
        formData.append("file_path",file_path)
        formData.append("is_social",is_social)
        formData.append("social_link",social_link)
        formData.append("title",title)
        formData.append("description",description)
        formData.append("image",image)

        console.log(formData);

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