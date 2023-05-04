<?php
/**
 * Title: Lean UX Canvas
 * Slug: lean-ux-canvas
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
<h2 class="wp-block-heading">The Lean UX Canvas</h2>
<!-- /wp:heading -->

<!-- wp:merpress/mermaidjs -->
<pre class="wp-block-merpress-mermaidjs mermaid">flowchart
  subgraph Main ["&lt;strong>Lean UX Canvas MVP01 01&lt;/strong>"]
  direction TB
    subgraph A [" "]
      subgraph 1 ["&lt;strong>Business Problem&lt;/strong> &lt;button>1&lt;/button>"]
        direction TB
        bp1>"&lt;em>What problem does the business have &lt;br/> that you are trying to solve? &lt;br/> (Hint: Consider your current offerings &lt;br/> and how they deliver value, &lt;br/> changes in the market, delivery channels, &lt;br/> competitive threats and customer behavior.)&lt;/em>"].-bp1a["****your answer****"]
      end
      subgraph 3 ["&lt;strong>Users&lt;/strong> &lt;button>3&lt;/button>"]
        direction TB
        u1>"What types (i.e., personas) of users and customers &lt;br/> should you focus on first? &lt;br/> (Hint: Who buys your product or service? &lt;br/>  Who uses it? Who configures it? Etc)"].-u1a["****your answer****"]
      end
      subgraph 6 ["&lt;strong>Hypotheses&lt;/strong> &lt;button>6&lt;/button>"]
        direction TB
        h1>"Combine the assumptions from 2, 3, 4 &amp; 5 &lt;br/> into the following hypothesis statement: &lt;br/> “We believe that [business outcome]&lt;br/>will be achieved if [user] attains [benefit] with [feature].”&lt;br/>(Hint: Each hypothesis should focus on one feature only.)"].-h1a["****your answer****"]
      end
    end
    subgraph B [" "]
      subgraph 5 ["&lt;strong>Solutions&lt;/strong> &lt;button>5&lt;/button>"]
        direction TB
        s1>"What can we make that will solve our business problem and 
meet the needs of our customers at the same time? List 
product, feature, or enhancement ideas here."].-s1a["****your answer****"]
      end
      subgraph 7 ["&lt;strong>What must we learn first?&lt;/strong> &lt;button>7&lt;/button>"]
        direction TB
        sl1>"What’s the most important thing &lt;br/> we need to learn first? &lt;br/> For each hypothesis from Box 6, &lt;br/> identify its riskiest assumptions. &lt;br/> Then determine the riskiest one right now. &lt;br/> This is the assumption &lt;br/> that will cause the entire idea to fail&lt;br/>if it’s wrong. &lt;br/> (Hint:&lt;br/>In the early stages of a hypothesis &lt;br/> focus on risks to value  &lt;br/> rather than feasibility.)"].-sl1a["****your answer****"]
      end
    end
    subgraph C [" "]
      subgraph 2 ["&lt;strong>Business Outcomes&lt;/strong> &lt;button>2&lt;/button>"]
        direction TB
        bo1>"How will you know&lt;br/>you solved the business problem? &lt;br/> What will you measure? &lt;br/> (Hint: What will people/users be doing differently &lt;br/> if your solutions work? &lt;br/> Consider metrics that indicate customer success &lt;br/> like average order value,&lt;br/>time on site, and retention rate.)"].-bo1a["****your answer****"]
      end
      subgraph 4 ["&lt;strong>User Outcomes &amp; Benefits&lt;/strong> &lt;button>4&lt;/button>"]
        direction TB
        uob1>"Why would your users&lt;br/>seek out your product or service? &lt;br/> What benefit would they gain from using it? &lt;br/> What behavior change can we observe &lt;br/> that tells us they've achieved their goal? &lt;br/> (Hint: Save money, get a promotion,&lt;br/>spend more time with family)"].-uob1a["****your answer****"]
      end
      subgraph 8 ["&lt;strong>What’s the least amount of work &lt;br/> we need to do &lt;br/> to learn the next most important thing?&lt;/strong> &lt;button>8&lt;/button>"]
        direction TB
        law1>"Design experiments to learn as fast as you can &lt;br/> whether your riskiest assumption is true or 
false."].-law1a["****your answer****"]
      end
    end
  end</pre>
<!-- /wp:merpress/mermaidjs --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
