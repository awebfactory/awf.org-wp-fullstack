<?php
/**
 * Title: Project Progress
 * Slug: project-progress
 * Description: Project progress at a glance
 * Categories: team
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: core/post-content
 * Post Types: project
 * Inserter: true
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Project Progress</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Process checklist</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<form action="/action_page.php">
  <input type="checkbox" id="progress-process-checklist" name="progress1" value="BMC">
  <label for="progress1">Business Model Canvas</label><br>
  <input type="checkbox" id="progress-task-completion" name="progress2" value="LUXC">
  <label for="progress2">Lean UX Canvas</label><br>
  <input type="checkbox" id="progress-fl" name="progress3" value="FL">
  <label for="progress3">Feature List</label><br>
  <input type="checkbox" id="progress-ds" name="progress4" value="DS">
  <label for="progress4">Design System</label><br>
  <input type="checkbox" id="progress-kbn" name="progress5" value="KB">
  <label for="progress5">Kanban Board</label><br>
  <input type="checkbox" id="progress-cnv" name="progress6" value="Cnv">
  <label for="progress6">Conversations</label><br>
  <input type="checkbox" id="progress-cnf" name="progress7" value="Cnf">
  <label for="progress7">Confirmation: Pivot/Maintain</label>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Task completion</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":257,"width":132,"height":89,"style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
<figure class="wp-block-image is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/image-1.jpeg" alt="" class="wp-image-257" style="border-radius:0px" width="132" height="89"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Burndown chart</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":258,"width":132,"height":87} -->
<figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/image-2.jpeg" alt="" class="wp-image-258" width="132" height="87"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
