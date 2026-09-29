<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));

/*
 * @author Balaji
 * @Theme: Default Style
 * @copyright � 2017 ProThemes.Biz
 *
 */
?>
<div class="bg-grey-color">

	<!-- begin .container -->
	<div class="feature-cont">
		    &nbsp; 
		    &nbsp; 
		    <h3 class="how-works"><?php trans('How It Works?',$lang['']); ?></h3>
    <div class="features">
  <div class="feature-item">
    <div class="feature-img-1" style="float: right; margin-left: 50px; margin-top: 6%;">
      <img src="https://itzfizzdigital.b-cdn.net/seo%20analysis%20(1).png" alt="SEO Analysis" class="attachment-large size-large" width="100%" height="400px">
    </div>
    &nbsp; 
    <br>
    <div class="feature-txt-1">
      <h4><?php trans('SEO Analysis',$lang['']); ?></h4>
     <p><?php trans("The itzfizz SEO Checker helps identify errors and SEO issues related to meta-information, including:", $lang['']); ?></p>
<ul>
  <li><?php trans("Meta titles and descriptions that are either too short or too long for search result snippets.", $lang['']); ?></li>
  <li><?php trans("Meta tags that hinder search engines from indexing your website.", $lang['']); ?></li>
  <li><?php trans("Missing canonical links.", $lang['']); ?></li>
  <li><?php trans("Inconsistent language declarations.", $lang['']); ?></li>
</ul>
    </div>
    <br>
  </div>
  &nbsp; 
  &nbsp; 
    <div class="features">
  <div class="feature-item">
      <br>
    <div class="feature-img-2" style="float: left; margin-right: 50px;">
      <img src="https://itzfizzdigital.b-cdn.net/speed%20test%20(1).png" alt="SEO Analysis" class="attachment-large size-large" width="100%" height="400px">
    </div>
    <br>
    <div class="feature-txt-2">
      <h4><?php trans('Speed Test',$lang['']); ?></h4>
      <p><?php trans('This powerful feature provides an in-depth analysis of your website speed, transcending standard SEO factors. By implementing the recommended optimizations, you will improve loading times, enhance user experience, and boost search engine rankings.',$lang['']); ?></p>
    </div>
  </div>
  &nbsp; 
  &nbsp; 
   <div class="features">
  <div class="feature-item">
      <br>
     <br>
     <br>
    <div class="feature-img-3" style="float: right; margin-left:50px;">
      <img src="https://itzfizzdigital.b-cdn.net/competitive%20analyses%20(1).png" alt="SEO Analysis" class="attachment-large size-large" width="100%" height="400px">
    </div>
    </div>
    <br>
    <div class="feature-txt-3">
      <h4><?php trans('Completive Analysis',$lang['']); ?></h4>
      <p><?php trans('Conduct side-by-side SEO comparisons with your competitors through our comprehensive analysis. Uncover opportunities to enhance your SEO strategy and improve your performance in relation to the competition. Stay ahead of the game by leveraging insights that drive your website to succeed and help you surpass your rivals..',$lang['']); ?></p>
    </div>
  </div>
	</div>
	<!-- end .container -->
	
<div class="faq-section">
  <h3 class="faq-head">Frequently Asked Questions (FAQs)</h3>
  <div class="faq-container">
    <div class="faq-item">
      <input id="faq1" type="checkbox">
      <label for="faq1">What is an SEO checker?</label>
      <div class="faq-content">
        <p>Itzfizz SEO checker is a tool that analyzes your website and identifies potential issues that could be affecting your search engine rankings. These issues can include meta, alts, keyword cloud & usage, speed, load time, mobile friendliness, etc.</p>
      </div>
    </div>
    <div class="faq-item">
      <input id="faq2" type="checkbox">
      <label for="faq2">How does an SEO checker work?</label>
      <div class="faq-content">
        <p>Itzfizz SEO checker works by crawling your website and analyzing its content, structure, and technical settings. The checker will then generate a report that identifies any potential issues and provides recommendations for how to fix them.</p>
      </div>
    </div>
    <div class="faq-item">
      <input id="faq3" type="checkbox">
      <label for="faq3">What does an SEO checker analyze?</label>
      <div class="faq-content">
        <p>Itzfizz SEO checker can analyze a wide range of factors that can affect your website's search engine rankings. These factors can include title tags, meta descriptions, website structure, and technical settings such as page loading speed, mobile-friendliness, and the use of correct keywords.</p>
      </div>
    </div>
    <div class="faq-item">
      <input id="faq4" type="checkbox">
      <label for="faq4">What is an SEO score?</label>
      <div class="faq-content">
        <p>SEO score is a number that indicates how well your website is optimized for search engines. SEO scores are typically calculated based on a variety of factors, including title tags, meta descriptions, content quality, and website structure.</p>
      </div>
    </div>
    <div class="faq-item">
      <input id="faq5" type="checkbox">
      <label for="faq5">Can I download a PDF with the results?</label>
      <div class="faq-content">
        <p>Yes, many SEO checkers allow you to download a PDF with the results of your website's analysis. This can be a helpful way to track your website's progress over time and share the results with others.</p>
      </div>
    </div>
    <div class="faq-item">
      <input id="faq6" type="checkbox">
      <label for="faq6">How can I improve my SEO score?</label>
      <div class="faq-content">
        <p>You can improve your SEO score by fixing the issues that are identified by our SEO checker. These issues can include technical errors, content-related issues, or structural problems.</p>
      </div>
    </div>
    <div class="faq-item">
      <input id="faq7" type="checkbox">
      <label for="faq7">Can I run a competitive analysis?</label>
      <div class="faq-content">
        <p>Yes, you can hit compare on the report page & run an analysis with your competitor to check their progress & what you can improve to rank better on Google.</p>
      </div>
    </div>
  </div>
</div>


<style>

.faq-section {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  padding: 40px 20px;
  background-color: #f7f7f7;
}

.faq-container {
  margin-top: 30px;
}

.faq-item {
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.faq-item label {
  display: block;
  padding: 15px 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
}

.faq-item label::before {
  content: '+';
  font-weight: bold;
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
}

.faq-item input {
  display: none;
}

.faq-item input:checked ~ .faq-content {
  display: block;
}

.faq-content {
  display: none;
  padding: 15px 20px;
}

</style>
	
	
</div>

<div class="container">
      <div class="row">
          <div id="latest-site">
              <div class="col-md-12">
                <div class="latest-heading">
                  <h4><span class="heading-icon"><i class="fa fa-envira"></i></span><?php trans('Recently Listed',$lang['137']); ?></h4>
                  <a class="btn btn-primary btn-sm pull-right" href="<?php createLink('recent'); ?>"><?php trans('View More',$lang['138']); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              

            <div class="row latest-content">
            <?php foreach($domainList as $domain){ ?>
            <div class="col-md-4">
                <div class="sites-block">
                    <a rel="nofollow" href="<?php createLink('domain/'.$domain[0]); ?>"><img alt="<?php echo $domain[0]; ?>" src="<?php createLink('ajax/snap/'.$domain[0]); ?>" class="image-overlay" /></a>
                    <div class="caption">
                        <a href="<?php createLink('domain/'.$domain[0]); ?>"><?php echo ucfirst($domain[0]); ?></a>
                    </div>
                    <div class="details clearfix">
                          <span><strong class="recentStrong"><?php echo $domain[1]; ?><span style="font-size: 12px;">/100</span></strong><?php trans('Score',$lang['134']); ?></span>
                          <span><strong class="recentStrong"><?php echo $domain[2]; ?></strong><?php trans('Global Rank',$lang['135']); ?></span>
                          <span><strong class="recentStrong"><?php echo $domain[3]; ?>%</strong><?php trans('Page Speed',$lang['136']); ?></span>
                      </div>
                </div>
            </div>
            <?php $count++; if($count != $perPage){if($count % 3 == 0){ echo '</div><div class="row latest-content">';} } } ?>
            </div><!-- /.row -->
                
          </div>
      </div>
</div>
