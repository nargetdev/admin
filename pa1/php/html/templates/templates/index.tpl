{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<!-- <h1 style="background:#f22; text-align:center; padding:5px;">Nate is currently modifying files!</h1> -->
<!-- <h1 style="background:#f22; text-align:center; padding:5px;">Akshay is currently modifying files!</h1> -->
<!-- <h1 style="background:#f22; text-align:center; padding:5px;">Sid is currently modifying files!</h1> -->
<div style="background:#0f9; text-align:center; padding:5px;"><h1>Nobody is making changes right now, sftp is safe to use.</h1><p>(You can set a flag in templates/index.tpl)</p></div>
<div style="background:#ddd; text-align:center; padding:5px;">
<h1>Updates:</h1>
<p>I have the pics come up for edit mode (but not for the first album interestingly). I still need to implement actually doing the edit operations, I'll do that later but Imma go slack now ;D</p>
</div>
<h1>INDEX</h1>
<p class="center">
	{$output}
</p>
{/block}