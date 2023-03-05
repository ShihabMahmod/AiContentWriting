                                            <form id="aiContentForm">
                                                <input type="hidden" name="_token" value="Hit72N6URiigh859F0L5kTE0ZfaDFriWu90LHWnw">                                            <div class="ai_writing_sidebar">
                                                <div class="ai_writing_sidebar_input">
                                                    <label>Choose Use Case</label>
                                                    <select name="usecase_id" class="select_js" id="usecase_id" style="display: none;">                                                                                                                                                                                           <option value="1">Business Ideas</option>
                                                    <option value="2">Blog Idea &amp; Outline</option>
                                                </select>
                                                <div class="nice-select select_js" tabindex="0"><span class="current">Business Ideas</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option selected">Business Ideas</li>
                                                    <li data-value="2" class="option focus">Blog Idea &amp; Outline</li>
                                                    <li data-value="3" class="option">Blog Section Writing</li>
                                                    <li data-value="4" class="option">Cover Letter</li>
                                                    <li data-value="6" class="option">Facebook, Twitter, LinkedIn Ads</li>
                                                    <li data-value="7" class="option">Google Search Ads</li>
                                                    <li data-value="8" class="option">Video Idea</li>
                                                    <li data-value="9" class="option">Video Description</li>
                                                    <li data-value="10" class="option">SEO Meta Title</li>
                                                    <li data-value="11" class="option">SEO Meta Description</li>
                                                    <li data-value="12" class="option">Post and Caption Idea</li>
                                                    <li data-value="13" class="option">Product Description</li>
                                                    <li data-value="14" class="option">Tag generation</li>
                                                    <li data-value="15" class="option">Custom Prompt</li>
                                                </ul>
                                            </div>
                                                </div>

                                                <div class="ai_writing_sidebar_input business_idea">
                                                    <label>Topic</label>
                                                    <input type="text" name="business_topic" placeholder="Type your interest..." autocomplete="off" required="required">
                                                </div>

                                                <div class="ai_writing_sidebar_input business_idea">
                                                    <label>Your skill</label>
                                                    <textarea name="skill" rows="4" placeholder="Type your skill" required="required"></textarea>
                                                </div>

                                                <div class="ai_writing_sidebar_input blog_idea d-none">
                                                    <label>Primary Keyword</label>
                                                    <input type="text" name="primary_keyword" placeholder="Web design, Php website, Laravel Website" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input blog_section_writing d-none">
                                                    <label>Your Topic</label>
                                                    <input type="text" name="topic" placeholder="Web design, Php website, Laravel Website" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input cover_letter d-none">
                                                    <label>Job Role</label>
                                                    <input type="text" name="job_role" placeholder="Content writer" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input cover_letter d-none">
                                                    <label>Your Skills</label>
                                                    <input type="text" name="job_skill" placeholder="Blog writing, copywriter" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input cover_letter d-none">
                                                    <label>Job Experience</label>
                                                    <input type="text" name="job_experience" placeholder="1 year + " autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input social_media_ad d-none">
                                                    <label>Product Name</label>
                                                    <input type="text" name="product_name" placeholder="Electronics accessories" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input google_ad d-none">
                                                    <label>Product Name</label>
                                                    <input type="text" name="product_name_for_google" placeholder="Electronics accessories" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input d-none video_idea">
                                                    <label>Topic</label>
                                                    <input type="text" name="video_idea_topic" placeholder="Write your topic here..." autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input video_description d-none">
                                                    <label>Topic</label>
                                                    <input type="text" name="video_description" placeholder="Write your topic here..." autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input d-none seo_meta_title">
                                                    <label>Your Target Keywords</label>
                                                    <input type="text" name="seo_meta_title" placeholder="Web design, development etc" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input seo_meta_description d-none">
                                                    <label>Your Target Keywords</label>
                                                    <input type="text" name="seo_meta_description" placeholder="Web design, development etc" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input post_topic d-none">
                                                    <label>Your Topic</label>
                                                    <input type="text" name="post_topic" placeholder="Web design, development etc" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input d-none product_description">
                                                    <label>Product Name</label>
                                                    <input type="text" name="product_name_description" placeholder="Mobile charger, bettery etc" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input tag_generate d-none">
                                                    <label>Your Topic</label>
                                                    <input type="text" name="tag_generate" placeholder="Mobile charger, bettery etc" autocomplete="off">
                                                </div>

                                                <div class="ai_writing_sidebar_input d-none custom_prompt">
                                                    <label>Custom Search</label>
                                                    <input type="text" name="custom_prompt" placeholder="How to use chatgpt" autocomplete="off">
                                                </div>

                                                <button id="search_ai_btn" class="read_btn" type="submit"><i class="fas fa-pencil" aria-hidden="true"></i>
                                                    write for me</button>
                                            </div>
                                        </form>




                                        <script>
  
  let use_case_from_url = "1";

  let business_idea = false;
  let blog_idea = false;
  let blog_section_writing = false;
  let cover_letter = false
  let social_media_afalsetrue;
  let google_ad = trfalse
  let video_idea = false;
  let video_description = false;
  let seo_meta_title = true;
  let seo_meta_description = true;
  let post_topic = true;
  let product_description = true;
  let tag_generate = true;
  let custom_prompt = true;

  (function($) {
  "use strict";
  $(document).ready(function () {

      $("#usecase_id").on("change", function(){
          let current_val = $(this).val();
          usecaseStatus(current_val)
      })
      $("#aiContentForm").on("submit", function(e){
          e.preventDefault();

          $("#search_ai_btn").attr("disabled", true);
          $("#search_ai_btn").html("Searching...");

          $.ajax({
              type:"post",
              data: $('#aiContentForm').serialize(),
              url:"https://demo.websolutionus.com/ai-techy/ai-writer",
              success:function(response){

                  $("#search_ai_btn").attr("disabled", false);
                  $("#search_ai_btn").html("write for me");

                  if(response.status == 'success'){
                      tinyMCE.get('ai_content_output').setContent(nl2br(response.ai_response));
                      let left_html = `${response.left_word} Words Left`;
                      $("#left_word").html(left_html);
                      toastr.success("Content generated successfully")

                      $("#aiContentForm").trigger("reset");

                      $("#search_ai_btn").attr("disabled", false);
                      $("#search_ai_btn").html("write for me");
                  }

                  if(response.status == 'faild'){
                      $("#search_ai_btn").attr("disabled", false);
                      $("#search_ai_btn").html("write for me");

                      $("#aiContentForm").trigger("reset");
                      toastr.error(response.message);


                  }

              },
              error:function(err){
                  $("#search_ai_btn").attr("disabled", false);
                  $("#search_ai_btn").html("write for me");
              }
          })
      })

  });

  })(jQuery);


  function usecaseStatus(value){
      let current_val = value;
      if(current_val == 1){
          business_idea = true;
          blog_idea = false;
          blog_section_writing = false;
          cover_letter = false;
          social_media_ad = false;
          google_ad = false;
          video_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 2){
          blog_idea = true;
          business_idea = false;
          blog_section_writing = false;
          cover_letter = false;
          social_media_ad = false;
          google_ad = false;
          video_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 3){
          blog_section_writing = true;
          blog_idea = false;
          business_idea = false;
          cover_letter = false;
          social_media_ad = false;
          google_ad = false;
          video_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 4){
          cover_letter = true;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          social_media_ad = false;
          google_ad = false;
          video_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 6){
          social_media_ad = true;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          google_ad = false;
          video_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 7){
          google_ad = true;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          video_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;


      }else if(current_val == 8){
          video_idea = true;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          video_description = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;


      }else if(current_val == 9){
          video_description = true;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          seo_meta_title = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 10){
          seo_meta_title = true;
          video_description = false;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          seo_meta_description = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 11){
          seo_meta_description = true;
          seo_meta_title = false;
          video_description = false;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          post_topic = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 12){
          post_topic = true;
          seo_meta_description = false;
          seo_meta_title = false;
          video_description = false;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          product_description = false;
          tag_generate = false;
          custom_prompt = false;

      }else if(current_val == 13){
          product_description = true;
          post_topic = false;
          seo_meta_description = false;
          seo_meta_title = false;
          video_description = false;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          tag_generate = false;
          custom_prompt = false;


      }else if(current_val == 14){
          tag_generate = true;
          product_description = false;
          post_topic = false;
          seo_meta_description = false;
          seo_meta_title = false;
          video_description = false;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;
          custom_prompt = false;

      }else if(current_val == 15){
          custom_prompt = true;
          tag_generate = false;
          product_description = false;
          post_topic = false;
          seo_meta_description = false;
          seo_meta_title = false;
          video_description = false;
          video_idea = false;
          google_ad = false;
          social_media_ad = false;
          cover_letter = false;
          blog_section_writing = false;
          blog_idea = false;
          business_idea = false;

      }
…
</script>                                       