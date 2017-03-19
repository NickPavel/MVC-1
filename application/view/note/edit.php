	<body>
		<div class="panel panel-default">
			<div class="panel-heading text-center">Nick Pavel</div>
			<div class="panel-body text-center">
<?php if ($this->note) { ?>
				<div>
					<form role="form" class="form-inline" method="post" action="<?= Config::get('URL').'note/update'; ?>">
						<div class="form-group">
							<label for="a">Change text of note: </label>
							<input type="hidden" name="note_id" value="<?= htmlentities($this->note->note_id); ?>" />
							<input class="form-control" id="a" type="text" name="note_text" value="<?= htmlentities($this->note->note_text); ?>" />
						</div>
						<button type="submit" class="btn btn-default">Change</button>
					</form>
				</div>
<?php } else { ?>
            <p>This note does not exist.</p>
<?php } ?>
			</div>
		</div>
	</body>
