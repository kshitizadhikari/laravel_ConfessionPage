@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    Request to register as verified therapist on this site!
  </div>
  <div class="card-body">
    <h5 class="card-title">fill the following form to send a request</h5>
    <form>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="firstname">
         </div>
         <div class="mb-3">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
         </div>
         <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="email">
         </div>
         <div class="mb-3">
            <label for="contact" class="form-label">Contact Number:</label>
            <input type="number" class="form-control" id="contact" >
         </div>
        <div class="mb-3">
            <label for="category" class="form-label">specialization:</label>
            <select id="category" class="form-select">
            <option>BPD</option>
            <option>Anxiety</option>
            <option>Dysmorphia</option>
            <option>PTSD</option>
            <option>Depression</option>
            <option>Bipolar disorder</option>
            <option>Eating Disorder</option>
            <option>ADHD</option>
            </select>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Accept all terms and conditions.</label>
        </div>
    </form>
    <a href="#" class="btn btn-primary">Send Request</a>
  </div>
</div>

@endsection