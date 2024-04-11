<table id="tableData" class="mt-5 pt-5">
    <thead>
        <tr>
            <th>SL</th>
            <th>Icon</th>
            <th>Link</th>
            {{-- <th>Description</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tableList">

    </tbody>
</table>


<script>
    // Get Data
    getData();
    async function getData(){

        let tableData = $("#tableData")
        let tableList = $("#tableList")

        showLoader()
        let res = await axios.get("/admin/social-list")
        hideLoader();
    
        if(res.status === 200 && res.data['status'] === "success"){

            tableData.DataTable().destroy();
            tableList.empty()

            let count = 1;
            res.data["data"].forEach(item => {
                let row = `<tr>
                        <td>${count}</td>
                        <td><i class="fa-brands fa-${item.social}"></i></td>
                        <td>${item.link}</td>
                        <td>
                            <button data-id="${item.id}"   class="btn btn-sm btn-outline-success editBtn">Edit</button>
                            <button data-id="${item.id}"  class="btn btn-sm btn-outline-danger deleteBtn">Delete</button>
                        </td>
                    </tr>`
                    count++;
                    tableList.append(row)
            })

        // Initial Data Table
        new DataTable('#tableData',{
            responsive: true,

        })

        }else{
            errorToast("Data Not Found")
        }
    }

    // Edit Item
    $("#tableList").on("click",".editBtn",async function(){
        let id = $(this).data("id")

        showLoader();
        let res = await axios.get(`/admin/social-by-id/${id}`)
        hideLoader();
        if(res.status === 200){
            $("#social_id").val(res.data["id"])
            $("#social").val(res.data["social"])
            $("#link").val(res.data["link"])
            $("#submitBtn").html("Update Social")

            $("#socialModal").modal("show")
        }else{
            errorToast("Something is wrong")
        }
    })

    // Delete item
    $("#tableList").on("click",".deleteBtn",async function(){
        let id = $(this).data("id")
        let tr = $(this).parent().parent();
      
        if(confirm("Are you want to Delete?")){
          
            let res = await axios.post("/admin/social-delete",{id: id})

            if(res.status === 200 && res.data['status'] === "success"){
                // tr.remove().draw();;
                await getData();
                successToast(res.data["message"])
            }else{
                errorToast(res.data["message"])
            }
        }
    })

   
</script>