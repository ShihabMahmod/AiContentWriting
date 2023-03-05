<?php

namespace App\Http\Controllers;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function GenerateContent(Request $request)
    {
       // dd($request->all());

        if(!empty($request->interest) && !empty($request->skill))
        {
            $interest =  $request->interest;
            $skill =  $request->skill;

            $promt ="write a business idia about $interest fom me and my skills are $skill";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->primary_keyword))
        {
            $primary_keyword =  $request->primary_keyword;

            $promt ="Write a blog idia and out line about $primary_keyword";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->blog_section_writing))
        {
            $blog_section_writing =  $request->blog_section_writing;

            $promt ="Write an article based on : $blog_section_writing with 10 paragraph";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->name) && !empty($request->job_role) && !empty($request->job_skill) && !empty($request->job_experience))
        {
            $name =  $request->name;
            $job_role =  $request->job_roll;
            $job_skill =  $request->job_skill;
            $job_experience =  $request->job_experience;

            $promt ="Write a cover letter for $name job role $job_role job skill $job_skill  and my job experience is $job_experience";
            //dd($promt);
            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->video_idea_topic))
        {
            $video_idea_topic =  $request->video_idea_topic;
            $promt ="Give me 30 best idea for crate video based on : $video_idea_topic ";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->video_description))
        {
            $video_description =  $request->video_description;
            $promt ="Write a video description based on : $video_description ";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->product_name_for_social_media))
        {
            $product_name_for_social_media =  $request->product_name_for_social_media;
            $promt ="Please give me facebook,twitter and linkdin ads for $product_name_for_social_media";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->seo_meta_description))
        {
            $seo_meta_description =  $request->seo_meta_description;
            $promt ="Write a SEO meta description based on : $seo_meta_description";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
            ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'image' => $image_url,
                'status' => true
            ]);
        }
        elseif(!empty($request->seo_meta_title))
        {
            $seo_meta_title =  $request->seo_meta_title;
            $promt ="Write a meta title based on : $seo_meta_title.";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->post_topic))
        {
            $post_topic =  $request->post_topic;
            $promt ="Write a post based oon : $post_topic and give it captions";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->product_name_description))
        {
            $product_name_description =  $request->product_name_description;
            $promt ="Write description for : $product_name_description  with 10 paragraph";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->tag_generate))
        {
            $tag_generate =  $request->tag_generate;
            $promt ="Please give me more than 40 tags for $tag_generate";

            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $promt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        elseif(!empty($request->custom_prompt))
        {
            $custom_prompt =  $request->custom_prompt;
        
            $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $custom_prompt,
            'max_tokens' => 4000
            
        ]);
            $data =  $result['choices'][0]['text'];
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        }
        
    }
}
