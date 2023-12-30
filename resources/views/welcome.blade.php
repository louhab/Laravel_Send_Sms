<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="bg-gray-200 flex items-center justify-center h-screen">
        <div class="max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-bold mb-4 text-center">Send SMS</h1>
            <form action="{{route('send_sms')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                    <textarea id="message" name="message"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4" cols="50"></textarea>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Send SMS
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
