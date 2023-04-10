


<div class="modal fade text-left" id="Modalpost" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  
                       
                        <button type="button" class="btn-close mt-2 ms-2" data-bs-dismiss="modal" aria-label="Close"></button>

                    
                    <div class="modal-body">
                    <form action="{{route('usersavePost')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                
                                <input type="text" style="min-width:90%"
                                    class="  m-3 border border-darker text-black-dark rounded-pill bg-light ps-2 p-1 text-start"
                                    placeholder="Title" name="postTitle">

                                <textarea style="min-width:90%"
                                    class=" post  m-3  border border-dark text-black-dark  rounded bg-light ps-2 text-start"
                                    placeholder="Enter Text" name="post" rows="8" cols="20"> </textarea>
                                <input type="hidden" value="{{ auth()->user()->id}}" name="user_id">
                            </div>
                        </div>
                        <div class="post-img ps-3">
                            <input type="file" name="file[]" id="file" multiple>

                            <label for="file" class="chooseimg me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                                </svg>Choose a Picture</label>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        
                        <input class="btn btn-primary" type="submit" value="Post">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
            </div>
        </div>