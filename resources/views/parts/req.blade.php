<div class="col">
<form id="request-form">
{{ csrf_field() }}


  <div class="form-group" id="ein">
    <label for="ein">EIN</label>
    <input type="text" name="ein" class="form-control" placeholder="Please enter your EIN">
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="name">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Please enter your full name">
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="email">
    <label for="email">Email</label>
    <input type="eamil" name="email" class="form-control" placeholder="Please enter your Email">
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="area">
    <label for="area">Request Area</label>
    <input type="text" name="area" class="form-control" placeholder="Please enter the area the request effects">
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="benefit">
    <label for="benefit">Benefit</label>
    <input type="text" name="benefit" class="form-control" placeholder="Please enter the area the expected benefit">
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="adhoc">
    <label for="adhoc">Is the request adhoc?</label>
      <select class="form-control" name="adhoc">>
        <option value="0">Yes</option>
        <option value="1">No</option>
      </select>
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="audiance">
    <label for="audiance">Audience</label>
      <select class="form-control" name="audiance">
        <option value="National">National</option>
        <option value="Regional">Regional</option>
        <option value="External">External</option>
        <option value="Restricted">Restricted</option>
        <option value="Other">Other</option>
      </select>
    <span class="help-block"></span>
  </div>

  <div class="form-group" id="description">
    <label for="description">Benefit</label>
    <textarea name="description" class="form-control"></textarea>
    <span class="help-block"></span>
  </div>

<div class="alert alert-success" style="display: none;">Thanks you for your request. We aim to review this in under 36 hours</div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" id="request">Submit</button>
    </div>
  </div>
</form>
</div>