{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<div class="wrapper">
<h1>PIC</h1>
<p class="important">
  Welcome {$picid}
</p>
<p>
	{$nextbutton}
</p>
{$output}
</div>
{/block}