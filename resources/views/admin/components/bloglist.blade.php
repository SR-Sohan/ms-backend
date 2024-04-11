<table id="tableData" class="mt-5 pt-5">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
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
        let res = await axios.get("/admin/blog-list")
        hideLoader();
    
        if(res.status === 200 && res.data['status'] === "success"){

            tableData.DataTable().destroy();
            tableList.empty()


            res.data["data"].forEach(item => {
                let row = `<tr>
                        <td><img class="w-25" src="{{asset('storage/images/blog/${item.thumbnail}')}}"/></td>
                        <td>${item.title}</td>
                        <td>
                            <button data-id="${item.id}" data-path="${item.image}"  class="btn btn-sm btn-outline-success editBtn">Edit</button>
                            <button data-id="${item.id}" data-path="${item.image}" class="btn btn-sm btn-outline-danger deleteBtn">Delete</button>
                        </td>
                    </tr>`
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
        let path = $(this).data("path")

        showLoader();
        let res = await axios.get(`/admin/blog-by-id/${id}`)
        hideLoader();
        if(res.status === 200){
            $("#blog_id").val(res.data["id"])
            $("#file_path").val(res.data["thumbnail"])
            $("#title").val(res.data["title"])
            // $("#description").val(res.data["description"])
            $('#description').summernote('code', res.data["description"]);
            $("#preview").attr("src", '{{ asset("storage/images/blog") }}' + '/' + res.data['thumbnail']);
            console.log(res.data["description"]);
            $("#submitBtn").html("Update Blog")

            $("#blogModal").modal("show")
        }else{
            errorToast("Something is wrong")
        }
    })

    // Delete item
    $("#tableList").on("click",".deleteBtn",async function(){
        let id = $(this).data("id")
        let path = $(this).data("path")
        let tr = $(this).parent().parent();
      
        if(confirm("Are you want to Delete?")){
          
            let res = await axios.post("/admin/blog-delete",{id: id,path: path})

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