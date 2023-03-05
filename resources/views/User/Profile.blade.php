@include('Layout.UserHeader')
    
    <div class="container">
       
    <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{Auth::User()->name}}</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::User()->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::User()->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::User()->address}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
              
                <form id="ContentGenerateForm" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="country">Choose Use Case</label>
                      <select class="form-control"  id="option">
                              <option value="1">Business Ideas</option>
                              <option value="2">Blog Idea & Outline</option>
                              <option value="3">Article Writing</option>
                              <option value="4">Cover Letter</option>
                              <option value="5">Facebook, Twitter, LinkedIn Ads</option>
                              <option value="6">Google Search Ads</option>
                              <option value="7">Video Idea</option>
                              <option value="8">Video Description </option>
                              <option value="9">SEO Meta Title </option>
                              <option value="10">SEO Meta Description </option>
                              <option value="11">Post and Caption </option>
                              <option value="12">Product Description </option>
                              <option value="13">Tag generation </option>
                              <option value="14">Custom Prompt </option>
                      </select>
                    </div>

                    <div class="mb-3 business_idias mt-5" >
                        <label for="exampleFormControlTextarea1" class="form-label">Topic</label>
                        <textarea class="form-control" name="interest" placeholder="Type your inteerest"></textarea>
                    </div>
                    <div class="mb-3 business_idias mt-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Skill</label>
                        <textarea class="form-control"  name="skill"  row="5"></textarea>
                    </div>

                    <div class="ai_writing_sidebar_input blog_idea mt-5">
                        <label>Primary Keyword</label>
                        <textarea class="form-control" type="text" name="primary_keyword" placeholder="Web design, Php website, Laravel Website" autocomplete="off"></textarea>
                    </div>

                    <div class="ai_writing_sidebar_input blog_section_writing mt-5">
                         <label>Your Topic</label>
                             <textarea class="form-control" type="text" name="blog_section_writing" placeholder="Web design, Php website, Laravel Website" autocomplete="off"></textarea>
                    </div>

                        <div class="ai_writing_sidebar_input cover_letter  mt-3">
                            <label>Name</label>
                            <textarea class="form-control" type="text" name="name" placeholder="Content writer" autocomplete="off"></textarea>
                        </div>

                        <div class="ai_writing_sidebar_input cover_letter  mt-3">
                            <label>Job Role</label>
                            <textarea class="form-control" type="text" name="job_role" placeholder="Content writer" autocomplete="off"></textarea>
                        </div>

                      <div class="ai_writing_sidebar_input cover_letter mt-3">
                          <label>Your Skills</label>
                          <textarea class="form-control" type="text" name="job_skill" placeholder="Blog writing, copywriter" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input cover_letter mt-5 ">
                          <label>Job Experience</label>
                          <input class="form-control" type="number" name="job_experience" placeholder="1 year + " autocomplete="off">
                      </div>

                      <div class="ai_writing_sidebar_input social_media_ad mt-5">
                          <label>Product Name</label>
                          <textarea class="form-control" type="text" name="product_name_for_social_media" placeholder="Electronics accessories" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input google_ad mt-5">
                          <label>Product Name</label>
                          <textarea class="form-control" type="text" name="product_name_for_google" placeholder="Electronics accessories" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input video_idea mt-5">
                          <label>Topic</label>
                          <textarea class="form-control" type="text" name="video_idea_topic" placeholder="Write your topic here..." autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input video_description mt-5">
                          <label>Topic</label>
                          <textarea class="form-control" type="text" name="video_description" placeholder="Write your topic here..." autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input  seo_meta_title mt-5">
                          <label>Your Target Keywords</label>
                          <textarea class="form-control" type="text" name="seo_meta_title" placeholder="Web design, development etc" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input seo_meta_description mt-5">
                          <label>Your Target Keywords</label>
                          <textarea class="form-control" type="text" name="seo_meta_description" placeholder="Web design, development etc" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input post_topic mt-5">
                          <label>Your Topic</label>
                          <textarea class="form-control" type="text" name="post_topic" placeholder="Web design, development etc" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input  product_description mt-5">
                          <label>Product Name</label>
                          <textarea class="form-control" type="text" name="product_name_description" placeholder="Mobile charger, bettery etc" autocomplete="off"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input tag_generate mt-5">
                          <label>Your Topic</label>
                          <textarea class="form-control" type="text" name="tag_generate" placeholder="Mobile charger, bettery etc"></textarea>
                      </div>

                      <div class="ai_writing_sidebar_input custom_prompt mt-5">
                          <label>Custom Search</label>
                          <input class="form-control" type="text" name="custom_prompt" placeholder="How to use chatgpt" autocomplete="off">
                      </div>

                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
              </div>
            </div>
          </div>    
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                        
                        <textarea id="returnData" style="font-family:Times New Roman;font-size:26px;" class="form-control" rows="8"></textarea>
                    </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    
    </div>
    
@include('Layout.UserFooter')


<script>
  
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });

    $(document).ready(function() {

              $(".blog_idea").hide();
              $(".blog_section_writing").hide();
              $(".cover_letter").hide();
              $(".social_media_ad").hide();
              $(".google_ad").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

          $('#option').on('change', function() {
            var optionValue = $(this).val();
            
            if(optionValue == 1)
            {
              $(".business_idias").show();

              $(".blog_idea").hide();
              $(".blog_section_writing").hide();
              $(".cover_letter").hide();
              $(".social_media_ad").hide()
              $(".google_ad").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
           else if(optionValue == 2)
            {
              $(".blog_idea").show();
              

              $(".business_idias").hide();
              $(".blog_section_writing").hide();
              $(".cover_letter").hide();
              $(".social_media_ad").hide();
              $(".google_ad").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 3 )
            {
              $(".blog_section_writing").show();
              

              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".cover_letter").hide();
              $(".social_media_ad").hide();
              $(".google_ad").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 4 )
            {
              $(".cover_letter").show();
              

              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".social_media_ad").hide();
              $(".google_ad").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 5 )
            {
              $(".social_media_ad").show();
              
              

              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".google_ad").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 6)
            {
              $(".google_ad").show();
              

              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".video_idea").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 7)
            {
              $(".video_idea").show();
              

              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".video_description").hide();
              $(".seo_meta_title").hide(); 
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 8)
            {
              $(".video_description").show();
              

              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".seo_meta_title").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 9)
            {
              $(".seo_meta_title").show();
              

              $(".video_description").hide()
              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".seo_meta_description").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 10)
            {
              $(".seo_meta_description").show();
              

              $(".seo_meta_title").hide();
              $(".video_description").hide()
              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".post_topic").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

              
            }
            else if(optionValue == 11)
            {
              $(".post_topic").show();
              

              $(".seo_meta_description").hide();
              $(".seo_meta_title").hide();
              $(".video_description").hide()
              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".product_description").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

            }
            else if(optionValue == 12)
            {
              $(".product_description").show();
              

              $(".post_topic").hide();
              $(".seo_meta_description").hide();
              $(".seo_meta_title").hide();
              $(".video_description").hide()
              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".tag_generate").hide();
              $(".custom_prompt").hide();

              
            }
            else if(optionValue == 13)
            {
              $(".tag_generate").show();
              

              $(".product_description").hide();
              $(".post_topic").hide();
              $(".seo_meta_description").hide();
              $(".seo_meta_title").hide();
              $(".video_description").hide()
              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();
              $(".custom_prompt").hide();              
              
            }
            else if(optionValue == 14)
            {
              $(".custom_prompt").show();
              

              $(".tag_generate").hide();
              $(".product_description").hide();
              $(".post_topic").hide();
              $(".seo_meta_description").hide();
              $(".seo_meta_title").hide();
              $(".video_description").hide()
              $(".video_idea").hide();
              $(".google_ad").hide();
              $(".social_media_ad").hide();
              $(".cover_letter").hide();
              $(".blog_section_writing").hide();
              $(".blog_idea").hide();
              $(".business_idias").hide();        
            }
          });
      });
            $(document).on('submit', '#ContentGenerateForm', function(e) {
             e.preventDefault();
            $.ajax({
              type:"post",
              data: $('#ContentGenerateForm').serialize(),
              url:"{{route('content.data')}}",
              success:function(response){
               // console.log(response.data)
                  // $("#search_ai_btn").attr("disabled", false);
                  // $("#search_ai_btn").html("write for me");

                  if(response.status == true){
                    $("#returnData").val(response.data);
                    console.log(response.data)
                      
                  }
              },
          })
        });
</script>






