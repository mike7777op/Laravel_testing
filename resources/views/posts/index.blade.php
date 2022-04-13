<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet'>

    </head>

    <body>
        <div style='width:900px;' class='container max-w-full mx-auto pt-4'>

            @foreach($posts as $post)
                <atricle class='mb-2'>
                    <h2 class='text-x1 font-bold text-gray-900'>{{ $post->title }}</h2>

                    <p class='text-md text-gray-600'>{{ $post->content }}</p>
                </atricle>
            @endforeach
            
        </div>
        

    </body>
</html>
