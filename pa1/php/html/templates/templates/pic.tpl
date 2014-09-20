{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<div class="wrapper">
<h1>PIC</h1>
<p class="important">
  Welcome
</p>
<p>
	{$prevbutton} {$nextbutton}
</p>
{$output}
</div>
{/block}