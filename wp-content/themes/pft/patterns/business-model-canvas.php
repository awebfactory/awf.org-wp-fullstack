<?php
/**
 * Title: Business Model Canvas
 * Slug: business-model-canvas
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
<h2 class="wp-block-heading">The Business Model Canvas</h2>
<!-- /wp:heading -->

<!-- wp:merpress/mermaidjs -->
<pre class="wp-block-merpress-mermaidjs mermaid">graph

  %% classDef canvasStyle fill:#f2f2f2,stroke:#cccccc,stroke-width:2px;
  classDef default fill:#f2f2f2,stroke:#cccccc,stroke-width:2px;
  classDef nodeStyle fill:#ffffff,stroke:#cccccc,stroke-width:2px,rounded-corners:5px;
  classDef postItStyle fill:#ffffde,stroke:#cccccc,stroke-width:2px,rounded-corners:5px;


  subgraph Main ["&lt;strong>Business Model Canvas MVP01&lt;/strong>"]
    subgraph top[" "]
      subgraph col1["Key Partners"]
        direction LR
        kpQuestionsAndTips["&lt;small>Who are our Key Partners?&lt;br/>Who are our key suppliers?&lt;br/>Which Key Resources are we acquiring from partners?&lt;br/>Which Key Activities do partners perform?&lt;br/>&lt;br/>&lt;strong>MOTIVATIONS FOR PARTNERSHIPS&lt;/strong>:&lt;br/>Optimization and economy&lt;br/>Reduction of risk and uncertainty&lt;br/>Acquisition of particular resources and activities&lt;/small>"]:::nodeStyle

        kpa["Your content"]:::postItStyle

      end


      subgraph col2 [" "]
        subgraph col2r1 ["Key Activities"]
          direction LR
          kaQuestionAndTips["&lt;small>What Key Activities do our Value Propositions require?&lt;br/>Our Distribution Channels?&lt;br/>Customer Relationships?&lt;br/>Revenue streams?&lt;br/>&lt;br/>&lt;strong>CATEGORIES&lt;/strong>&lt;br/>Production&lt;br/>Problem Solving&lt;br/>Platform/Network&lt;/small>"]:::nodeStyle

          kaa["Your content"]:::postItStyle

        end
        subgraph col2r2 ["Key Resources"]
          direction LR
          krQuestionAndTips["&lt;small>What Key Resources do our Value Propositions require?&lt;br/>Our Distribution Channels? Customer Relationships?&lt;br/>Revenue Streams?&lt;br/>&lt;br/>&lt;strong>TYPES OF RESOURCES&lt;/strong>&lt;br/>Physical&lt;br/>Intellectual (brand patents, copyrights, data)&lt;br/>Human&lt;br/>Financial&lt;/small>"]:::nodeStyle

          kra["Your content"]:::postItStyle

        end
      end
      subgraph col3 ["Value Propositions"]
          direction LR
          vpQuestionAndTips["&lt;small>What value do we deliver to the customer?&lt;br/>Which one of our customer’s problems are we helping to solve?&lt;br/>What bundles of products and services are we offering to each Customer Segment?&lt;br/>Which customer needs are we satisfying?&lt;br/>&lt;br/>&lt;strong>CHARACTERISTICS&lt;/strong>&lt;br/>Newness&lt;br/>Performance&lt;br/>Customization&lt;br/>“Getting the Job Done”&lt;br/>Design&lt;br/>Brand/Status&lt;br/>Price&lt;br/>Cost Reduction&lt;br/>Risk Reduction&lt;br/>Accessibility&lt;br/>Convenience/Usability&lt;/small>"]:::nodeStyle

          vpa["Your content"]:::postItStyle

      end
      subgraph col4 [" "]
        subgraph col4r1 ["Customer Relationships"]
          direction LR
          crQuestionAndTips["&lt;small>What type of relationship does each of our Customer&lt;br/>Segments expect us to establish and maintain with them?&lt;br/>Which ones have we established?&lt;br/>How are they integrated with the rest of our business model?&lt;br/>How costly are they?&lt;br/>&lt;br/>&lt;strong>EXAMPLES&lt;/strong>&lt;br/>Personal assistance&lt;br/>Dedicated Personal Assistance&lt;br/>Self-Service&lt;br/>Automated Services&lt;br/>Communities&lt;br/>Co-creation&lt;/small>"]:::nodeStyle

          cra["Your content"]:::postItStyle

        end
        subgraph col4r2 ["Channels"]
          direction LR
          chQuestionAndTips["&lt;small>Through which Channels do our Customer Segments&lt;br/>want to be reached?&lt;br/>How are we reaching them now?&lt;br/>How are our Channels integrated?&lt;br/>Which ones work best?&lt;br/>Which ones are most cost-efficient?&lt;br/>How are we integrating them with customer routines?&lt;br/>&lt;br/>&lt;strong>CHANNEL PHASES:&lt;/strong>&lt;br/>1. Awareness: How do we raise awareness about our company’s products and services?&lt;br/>2. Evaluation: How do we help customers evaluate our organization’s Value Proposition?&lt;br/>3. Purchase: How do we allow customers to purchase specific products and services?&lt;br/>4. Delivery: How do we deliver a Value Proposition to customers?&lt;br/>5. After sales: How do we provide post-purchase customer support?&lt;/small>"]:::nodeStyle

          cha["Your content"]:::postItStyle

        end

      end
      subgraph col5 ["Customer Segments"]
          direction LR
          csQuestionAndTips["&lt;small>For whom are we creating value?&lt;br/>Who are our most important customers?&lt;br/>&lt;br/>Mass Market&lt;br/>Niche Market&lt;br/>Segmented&lt;br/>Diversified&lt;br/>Multi-sided Platform&lt;br/>&lt;/small>"]:::nodeStyle

          csa["Your content"]:::postItStyle

      end
    end
    subgraph bottom
      subgraph bcol1 ["Cost Structure"]
        direction LR
        cstQuestionAndTips["&lt;small>What are the most important costs inherent in our business model?&lt;br/>Which Key Resources are most expensive?&lt;br/>Which Key Activities are most expensive?&lt;br/>&lt;br/>&lt;strong>IS YOUR BUSINESS MORE:&lt;/strong>&lt;br/>Cost Driven (leanest cost structure, low price value proposition, maximum automation, extensive outsourcing)&lt;br/>Value Driven ( focused on value creation, premium value proposition)&lt;br/>&lt;br/>&lt;strong>SAMPLE CHARACTERISTICS:&lt;/strong>&lt;br/>Fixed Costs (salaries, rents, utilities)&lt;br/>Variable costs&lt;br/>Economies of scale&lt;br/>Economies of scope&lt;/small>"]:::nodeStyle

        csta["Your content"]:::postItStyle

      end
      subgraph bcol2 ["Revenue Streams"]
        direction LR
        rstQuestionAndTips["&lt;small>For what value are our customers really willing to pay?&lt;br/>For what do they currently pay?&lt;br/>How are they currently paying?&lt;br/>How would they prefer to pay?&lt;br/>How much does each Revenue Stream contribute to overall revenues?"&lt;/small>]:::nodeStyle

        subgraph rstrow [" "]
          rstrowcol1["&lt;small>&lt;strong>TYPES:&lt;/strong>&lt;br/>Asset sale&lt;br/>Usage fee&lt;br/>Subscription Fees&lt;br/>Lending/Renting/Leasing&lt;br/>Licensing&lt;br/>Brokerage fees&lt;br/>Advertising&lt;/small>"]:::nodeStyle
          rstrowcol2["&lt;small>&lt;strong>FIXED PRICING&lt;/strong>&lt;br/>List Price&lt;br/>Product feature dependent&lt;br/>Customer segment dependent&lt;br/>Volume dependent&lt;/small>"]:::nodeStyle
          rstrowcol3["&lt;small>&lt;strong>DYNAMIC PRICING&lt;/strong>&lt;br/>Negotiation( bargaining)&lt;br/>Yield Management&lt;br/>Real-time-Market&lt;/small>"]:::nodeStyle
        end

        rsta["Your content"]:::postItStyle

      end
    end
  end</pre>
<!-- /wp:merpress/mermaidjs --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
