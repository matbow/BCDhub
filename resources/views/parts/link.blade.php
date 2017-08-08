<div class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<div class="row mb-1">
	<div class="col-6">
		<div class="input-group">
	  		<span class="input-group-addon" id="basic-addon1">#</span>
	  		<input type="text" class="form-control" aria-describedby="basic-addon1" id="myInput" onkeyup="myFunction()" placeholder="Search for reports..">
		</div>		
	</div>
	<div class="col-6">
	  <div class="form-group">
	      <button type="submit" class="btn btn-default" id="request">Submit</button>
	  </div>		
	</div>

</div>

<div class="row">
@foreach($groups as $group)
<table id="myTable" class='table'>
<thead>
	<tr>
		<th>{{$group->name}}</th>
	</tr>
</thead>
	@foreach($group->cats as $cat)
	<thead>
		<tr>
			<td>{{$cat->name}}</td>
		</tr>
	</thead>
		<tbody>
	</tbody>		
		<tr>
			<td class="record-cont">


		@foreach($cat->links as $link)
			<div class="record">
				<a href="{!!$link->href!!}" title="{{$link->description}}">{{$link->name}}</a>
				<a href="/linl/edit/{{$link->id}}" class="btn btn-default" id="request">Edit</a>
			</div>
		
		@endforeach
	</td>
		</tr>

	@endforeach
	</tbody>
</table>
@endforeach
</div>


