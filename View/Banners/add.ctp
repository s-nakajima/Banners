<form id="nc-notepads-input-form-11" class="ng-pristine ng-valid" accept-charset="utf-8" method="post">

	<div class="form-group">
		<label for="NotepadTitle">バナー名称</label>
		<div class="input text">
			<input type="text" id="NotepadTitle" class="form-control ng-pristine ng-valid" name="data[Notepad][title]">
		</div>
	</div>

<div class="form-group">
	<label for="NotepadTitle">バナータイプ</label>
	<br>

	<input class="ng-pristine ng-valid" type="radio" value="3" name="banner_type" id="banner_type_image_banner_entry_9">
	<label for="banner_type_image_banner_entry_9" style="font-weight: normal">画像アップロード</label>
	<br />
	<input class="ng-pristine ng-valid" type="radio" value="2" name="banner_type" id="banner_type_url_banner_entry_9">
	<label for="banner_type_url_banner_entry_9" style="font-weight: normal">画像URL</label>
	<br />
	<input class="ng-pristine ng-valid" type="radio"  value="4" name="banner_type" id="banner_type_source_banner_entry_9">
	<label for="banner_type_source_banner_entry_9" style="font-weight: normal">外部ソースの貼り付け</label>
</div>



	<div class="form-group">
		<label for="NotepadTitle">リンク先</label>
		<div class="input text">
			<div class="form-group">
			  <div class="input-group">
				<div class="input-group-addon">URL</div>
					<input id="NotepadTitle" type="url" class="form-control ng-pristine ng-valid" name="data[Notepad][title]">
			  </div>
			</div>
		</div>
	</div>



	<div class="form-group">
		<label for="NotepadTitle">画像リンク</label>
		<div class="input text">
			<div class="form-group">
			  <div class="input-group">
				<div class="input-group-addon">URL</div>
					<input id="NotepadTitle" type="url" class="form-control ng-pristine ng-valid" name="data[Notepad][title]">
			  </div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="NotepadTitle">アップロード</label>
		<input id="NotepadTitle" type="file" class="ng-pristine ng-valid" name="data[Notepad][title]" style="height: 34px">
	</div>

	<div class="form-group">
		<label for="NotepadContent">外部ソース</label>
		<div class="input textarea">
			<textarea id="NotepadContent" rows="6" cols="30" class="form-control ng-pristine ng-valid" name="data[Notepad][content]">

			</textarea>
		</div>
	</div>

	<p class="text-center">
		<button class="btn btn-default" type="button">
				キャンセル
		</button>
		<button class="btn btn-primary" type="button">
			<span style="margin-left: 10px; margin-right: 10px;">登　録</span>
		</button>
	</p>
</form>