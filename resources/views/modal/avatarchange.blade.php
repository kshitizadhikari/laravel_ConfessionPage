<style>
        .main-container{
           height: 100vh;
           display: flex;
           align-items: center;
           justify-content: center;
           flex-direction: column; 
        }
        .radio-buttons{
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }
        .custom-radio input{
            display: none;

        }
       
        .radio-btn{
            margin: 10px;
            width: 100px;
            height: 100px;
            border: 4px solid transparent;
            display: inline-block;
            border-radius: 10px;
            position: relative;
            text-align: center;
            box-shadow: 0 0 20px #c3c3c367;
            cursor: pointer;
        }
        .radio-btn > svg{
            color: #ffff;
            background-color: #8373e6;
            font-size: 20px;
            position: absolute;
            top:-15px;
            left:50%;
            transform: translateX(-50%) scale(4);
            border-radius: 50px;
            padding: 3px;
            transition: 0.2s;
            pointer-events: none;
            opacity: 0;

        }
        .radio-btn .images img{
            width: 100px;
            height: 100px;
             position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%); 

        }
            .custom-radio input:checked + .radio-btn{
                border:3px solid #8373e6;
            }

       .custom-radio input:checked +.radio-btn > svg{
          opacity: 1;
          transform: translateX(-50%) scale(1);
       }
    </style>
<div class="modal fade text-left" id="ModalAvatar" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Avatar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                    <div class="main-container">
       <div class="radio-buttons">
<label  class="custom-radio" >
    <input type="radio" name="radio" value="1">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-1.png')}}" alt="" srcset="">
      </div>
    
    </span>
</label>

<label  class="custom-radio" >
    <input type="radio" name="radio" value="2">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-2.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="3">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-3.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="4">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-4.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="5">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-5.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="6">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-6.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="7">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-7.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="8">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-8.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="9">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-9.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="10">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-10.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="11">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-11.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="12">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-12.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="13">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-13.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="14">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-14.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="15">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-15.png')}}" alt="" srcset="">
      </div>
    </span>
</label>

<label  class="custom-radio" >
    <input type="radio" name="radio" value="16">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-16.png')}}" alt="" srcset="">
      </div>
    
    </span>
</label>

<label  class="custom-radio" >
    <input type="radio" name="radio" value="17">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-17.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="18">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-18.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="19">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-19.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="20">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-20.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="21">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-21.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="22">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-22.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="23">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-23.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="24">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-24.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="25">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-25.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="26">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-26.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="27">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-27.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="28">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-28.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="29">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-29.png')}}" alt="" srcset="">
      </div>
    </span>
</label>
<label  class="custom-radio">
    <input type="radio" name="radio" value="30">
    <span class="radio-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
      </svg>
      <div class="images">
        <img src="{{asset('pp/pp-30.png')}}" alt="" srcset="">
      </div>
    </span>
</label>


       </div> 
    </div>
                    </div>
                    <div class="modal-footer">
                        
                        <a href="javascript:showopt()"  class="btn btn-primary">Save Changes</a>
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
          function showopt(){
            var id=document.querySelector('input[name="radio"]:checked').value;
            var url='{{route("userchangeavatar",":id")}}';
            url=url.replace(':id',id);
            document.location.href=url;
          }
        </script>