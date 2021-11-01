<?php
	$this->assign('title','DESENVOLVIMENTOSERVIDORES2FINAL | Lembretes');
	$this->assign('nav','lembretes');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/lembretes.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});
		
		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container">

<h1>
	<i class="icon-th-list"></i> Lembretes
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Search..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="lembreteCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Registro">Registro<% if (page.orderBy == 'Registro') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Titulo">Titulo<% if (page.orderBy == 'Titulo') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Prioridade">Prioridade<% if (page.orderBy == 'Prioridade') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Descricao">Descricao<% if (page.orderBy == 'Descricao') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('registro')) %>">
				<td><%= _.escape(item.get('registro') || '') %></td>
				<td><%= _.escape(item.get('titulo') || '') %></td>
				<td><%= _.escape(item.get('prioridade') || '') %></td>
				<td><%= _.escape(item.get('descricao') || '') %></td>
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="lembreteModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="registroInputContainer" class="control-group">
					<label class="control-label" for="registro">Registro</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="registro"><%= _.escape(item.get('registro') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="tituloInputContainer" class="control-group">
					<label class="control-label" for="titulo">Titulo</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="titulo" placeholder="Titulo" value="<%= _.escape(item.get('titulo') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="prioridadeInputContainer" class="control-group">
					<label class="control-label" for="prioridade">Prioridade</label>
					<div class="controls inline-inputs">
						<select id="prioridade" name="prioridade">
							<option value=""></option>
							<option value="baixa"<% if (item.get('prioridade')=='baixa') { %> selected="selected"<% } %>>baixa</option>
							<option value="alta"<% if (item.get('prioridade')=='alta') { %> selected="selected"<% } %>>alta</option>
						</select>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="descricaoInputContainer" class="control-group">
					<label class="control-label" for="descricao">Descricao</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="descricao" placeholder="Descricao" value="<%= _.escape(item.get('descricao') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteLembreteButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteLembreteButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete Lembrete</button>
						<span id="confirmDeleteLembreteContainer" class="hide">
							<button id="cancelDeleteLembreteButton" class="btn btn-mini">Cancel</button>
							<button id="confirmDeleteLembreteButton" class="btn btn-mini btn-danger">Confirm</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="lembreteDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Edit Lembrete
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="lembreteModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancel</button>
			<button id="saveLembreteButton" class="btn btn-primary">Save Changes</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="lembreteCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newLembreteButton" class="btn btn-primary">Add Lembrete</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
