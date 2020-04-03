@extends('myproject.account')
@section('content')

<form action="{{url('inbooking/inpay',$name)}}" style="font-size:20px;font-weight:20px;">

  <div class='pretty p-svg p-round p-plain p-jelly'>
      <input type='checkbox' name='cleansing' value='cleansing'>
     <div class='state p-danger'>
         <span class='svg' uk-icon='icon: check'></span>
         <label><b>cleansing(80)</b></label>
     </div>
 </div>
<br><br>


  <div class='pretty p-svg p-round p-plain p-jelly'>
    <input type='checkbox' name='spa' value='spa'>
     <div class='state p-danger'>
         <span class='svg' uk-icon='icon: check'></span>
         <label><b>spa(60)</b></label>
     </div>
 </div>
<br><br>

<div class='pretty p-svg p-round p-plain p-jelly'>
    <input type='checkbox' name='manicure' value='manicure'>
   <div class='state p-danger'>
       <span class='svg' uk-icon='icon: check'></span>
       <label><b>manicure(80)</b></label>
   </div>
</div>
<br><br>

<div class='pretty p-svg p-round p-plain p-jelly'>
        <input type='checkbox' name='pedicure' value='pedicure'>
   <div class='state p-danger'>
       <span class='svg' uk-icon='icon: check'></span>
       <label><b>pedicure(60)</b></label>
   </div>
</div>
<br><br>


<input type="submit" name="submit" value="submit" >
</form>
@stop
