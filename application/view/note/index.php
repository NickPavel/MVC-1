	<body>
		<div class="panel panel-default">
			<div class="panel-heading text-center">Note Controller</div>
			<div class="panel-body text-center">
				<p>
					This is just a simple CRUD implementation. Creating, reading, updating and deleting things.
				</p>
				<div>
					<form role="form" class="form-inline" method="post" action="<?= Config::get('URL').'note/create';?>">
							<div class="form-group">
								<label for="a">Text of new note: </label>
								<input id="a" type="text" name="note_text" class="form-control" />
							</div>
							<button type="submit" class="btn btn-default">Create this note</button>
					</form>
				</div>
				<br>
<?php if ($this->notes) { ?>
				<div>
					<table class="table table-bordered">
						<tr>
							<td>Id</td>
							<td>Note</td>
							<td>EDIT</td>
							<td>DELETE</td>
						</tr>
<?php foreach($this->notes as $key => $value) { ?>
						<tr>
							<td><?= $value->note_id; ?></td>
							<td><?= htmlentities($value->note_text); ?></td>
							<td><a href="<?= Config::get('URL') . 'note/edit/' . $value->note_id; ?>">Edit</a></td>
							<td><a href="<?= Config::get('URL') . 'note/delete/' . $value->note_id; ?>">Delete</a></td>
						</tr>
<?php } ?>
					</table>
				</div>
<?php } else { ?>
			<div>No notes yet. Create some !</div>
<?php } ?>
			</div>
		</div>
	</body>
