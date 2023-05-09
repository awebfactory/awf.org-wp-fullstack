<?php
/**
 * Title: Gantt Chart
 * Slug: gantt-chart
 * Description: 
 * Categories: team
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: core/post-content
 * Post Types: conversation, project
 * Inserter: true
 */

?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading -->
<h2 class="wp-block-heading">Gantt Chart</h2>
<!-- /wp:heading -->

<!-- wp:merpress/mermaidjs -->
<pre class="wp-block-merpress-mermaidjs mermaid">gantt
  dateFormat  YYYY-MM-DD
  axisFormat  %m-%d
  title AWebFactory 2023 MVP02 front-end app postponed
  
  MVP01 complete, MVP02 start :milestone, mvp0200, 2021-06-13, 1d
  
  section Provisioning Dev and Staging Env
  BMCanvas :active, mvp0201, after mvp0200, 1d
  LXCanvas :active, mvp0202, after mvp0201, 1d
  BMCanvas :active, mvp0203, after mvp0202, 1d
  
  section Analysis Content Model
  LXCanvas :active, mvp0204, after mvp0203, 1d
  BMCanvas :active, mvp0205, after mvp0204, 1d
  
  section Analysis and Implementation Web App Functionality
  LXCanvas :active, mvp0206, after mvp0205, 1d
  BMCanvas :active, mvp0207, after mvp0206, 1d
  
  section Test and Deploy
  LXCanvas :active, mvp0208, after mvp0207, 1d
  
  MVP02 complete :milestone, mvp0299, after mvp0208, 1d
  
  %% In Joplin click is external only:
  %% click mvp0102 href "https://awebfactory.com"
  %%   doesn't work with internal note links (shows a blank page)
  %% click mvp0101 href "#the-tasks"
  %%   So we have a `the tasks` section 
  %%     with semantic links to task notes</pre>
<!-- /wp:merpress/mermaidjs --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
