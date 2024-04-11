<!-- Modal -->
<div class="modal fade modal-lg" id="socialModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Social</h1>
          <button onclick="formReset()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="form">
            <input class="d-none" type="number" name="social_id" id="social_id">
            <div class="mb-3">
                {{-- <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-youtube"></i> --}}
                <label for="name">Select Social</label>
                <select class="form-select" name="social" id="social">
                    <option value="-1">Select your Social Website</option>
                    <option value="facebook-f">Facebook</option>
                    <option value="twitter">Twitter</option>
                    <option value="linkedin-in">Linkedin</option>
                    <option value="youtube">YouTube</option>
                    <option value="github">Github</option>
                </select>                
            </div>    
            <div class="mb-3">
                <label for="link">Social Link</label>
                <input type="text" name="link" id="link" class="form-control">
            </div>                    
          </form>
        </div>
        <div class="modal-footer">
          <button id="closeBtn" onclick="formReset()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="submitBtn" onclick="handleSubmit()" type="button" class="btn btn-primary">Add Social</button>
        </div>
      </div>
    </div>
  </div>

  <script>

    // form reset
    function formReset(){
      $("#form")[0].reset();
      $("#submitBtn").html("Add Social")
    }

    // Submit Form
    async function handleSubmit(){
      let social_id = $("#social_id").val();
      let social = $("#social").val();
      let link = $("#link").val();

       if(social === "-1"){
        errorToast("Social is required")
      }else if(link === ""){
        errorToast("Link is required")
      }else{

        let formData = new FormData();
        formData.append("social_id",social_id)
        formData.append("social",social)
        formData.append("link",link)


        let config = {
                headers: {
                    "Content-Type": "multipart/form-data", 
                },
            }
         
        showLoader();
        let res = await axios.post("/admin/social-create-update",formData,config)
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