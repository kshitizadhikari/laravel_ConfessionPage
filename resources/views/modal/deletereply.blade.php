<div class="modal fade text-left" id="replydelete" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm-centered modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">DELETE REPLY</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">You sure you want to delete this reply ?</div>
                    <input type="hidden" id="deletereplyid" value="">
                   

                    <div class="modal-footer">
                        
                        <a href="javascript:showopts()"class="btn btn-danger">Delete</a>
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
          function showopts(){
            // var id=document.getElementById('postid').value;
            var id=document.getElementById('deletereplyid').value;
          
            //  alert(id);
         
            var url='{{route("deletereply",":id")}}';
            url=url.replace(':id',id);
            document.location.href=url;
          }
        </script>