<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\CreateBlogRequest; 

class BlogController extends Controller
{
    public function index(Request $request)

    {   

        // filter the results if paginations parameters are supplied

        if ($request->has('perPage') || $request->has('page')) {
            $perPage = $request->input('perPage', 10); # the default is 10 blog per page
            $page = $request->input('page', 1); # the default setting is that the results start at page 1
            # paginate the results - 
            $blogs = Blog::paginate($perPage, ['*'], 'page', $page);

        } else {
            // Return all blogs without pagination if pagination parameters are not provided
            $blogs = Blog::all();
        }

    
        
        $blogsData = $blogs->map(function ($blog) {
        return [
            'title' => $blog->title,
            'author' => $blog->author,
            'content' => $blog->content,           
            'publicatie datum' => $blog->publication_date,
            ];
        });

        return response()->json([
                 'blogs' => $blogsData
        ]);
    }

    public function blogsPerMonth()
    {
       
        $blogs = Blog::all();

        // Initialize an array to hold the count of blogs grouped by month
        $blogsCountByMonth = [];


        foreach ($blogs as $blog) {
            // Parse the publication date
            $publicationDate = Carbon::parse($blog->publication_date);

            // Format the publication date to 'Y-m' (year-month)
            $monthYear = $publicationDate->format('Y-m');

            // Increment the count for the corresponding month
            if (!isset($blogsCountByMonth[$monthYear])) {
                $blogsCountByMonth[$monthYear] = 1;
            } else {
                $blogsCountByMonth[$monthYear]++;
            }
        }

        // Sort the array keys (months) in ascending order
        ksort($blogsCountByMonth);

        return response()->json([
            'blogs' => $blogsCountByMonth
        ]);
    }
    
    public function createBlogPost(CreateBlogRequest $request){
         // Validate the incoming request data
         $validatedData = $request->validated();
         #$data = $request;
         $data = $request->all(); 
         

        // Create a new blog record in the database
        $blog = Blog::create([
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'content' => $validatedData['content'],
            'publication_date' => $validatedData['publication_date'],
        ]);

       # $blog->save();

         // Return a response indicating success
         return response()->json(['message' => 'Blog created successfully', 'blog' => $blog], 201);
    }
}
