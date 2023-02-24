<div class="btn-group dropleft">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img  src="assets/imgs/user.svg" alt="User" style="width:20px;">  
    </button>
    <div class="dropdown-menu form">
       <form class="px-4 py-3">
          <div class="form-group">
             <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="{{trans("index.emailexam")}}">
          </div>
          <div class="form-group">
             <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="{{trans("index.passw")}}">
          </div>
          <div class="form-check mb-3">
             <input type="checkbox" class="form-check-input" id="dropdownCheck">
             <label class="form-check-label" for="dropdownCheck">
                {{trans("index.rememberme")}}
             </label>
          </div>
          <button type="submit" class="btn btn-primary btn-block">{{trans("index.signin")}}</button>
       </form>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="#"><small>{{trans("index.signupP1")}}</small></a>
       <a class="dropdown-item" href="#"><small>{{trans("index.forgotpass")}}</small></a>
    </div>
 </div>