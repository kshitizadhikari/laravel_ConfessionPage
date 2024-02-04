@extends('layouts.app')

@section('content')

<style>
.mainBox1 {
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box2 {
    border: 1px solid black;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

}

.primaryBtn {
    background-color: #ebd1a8;
    border: 2px solid #422800;
    border-radius: 20px;
    box-shadow: #422800 4px 4px 0 0;
    color: #422800;
    cursor: pointer;
    display: inline-block;
    font-weight: 600;
    font-size: 18px;
    padding: 10px 18px;
    line-height: 26px;
    text-transform: uppercase;
    text-align: center;
    text-decoration: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
}

.primaryBtn:hover {
    background-color: #fbeee0;
}

.primaryBtn:active {
    box-shadow: #422800 2px 2px 0 0;
    transform: translate(2px, 2px);
}

@media (min-width: 768px) {
    .primaryBtn {
        min-width: 120px;
        padding: 0 25px;
    }
}


input,
textarea {
    border: 1px solid black;
}
</style>
<div class="mainBox1">
    <div class="box2">
        <form action="{{route('usereditPost.edit')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col">

                    <input type="hidden" value="{{$data->id}}" name="id">
                    <input type="text" style="min-width:90%"
                        class="  m-3 border-black text-black-dark rounded-pill bg-light ps-2 text-start"
                        placeholder="Title" name="postTitle" value="{{$data->title}}">

                    <textarea style="min-width:90%" class="  m-3 border-black text-black-dark bg-light ps-2 text-start"
                        placeholder="Enter Text" name="post" rows="10" cols="30">{{$data->post}} </textarea>

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
            <div class="post-images pt-2  d-flex">
                @php

                $images=explode('|',$data['img']);

                @endphp

                @if($images[0]=="")
                <!-- <p class="text-center">No Images selected</p> -->
                @else
                @foreach($images as $image)

                <div class="d-flex me-2 ps-2" style="flex-direction:column; gap:10px;">

                    <img src="{{url('public/uploads/'.$image)}}" class="img-fluid" alt=""
                        style="object-fit:cover;height:100px;width:100px;">
                    <a href="{{route('userdeleteimg',['img' => $image, 'postid' =>$data->id])}}"> <button type="button"
                            class="btn btn-danger">delete</button></a>

                </div>

                @endforeach
                @endif


            </div>
            <div class="row text-gray-darker pt-4 pb-2 ps-3 pe-4 ">
                <div class="col text-center">

                    <button type="submit" class="primaryBtn p-1 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                        </svg>Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection