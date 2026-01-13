<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginners - Fixed Popover</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* 1. Define the anchor name on the trigger button */
        .profile-trigger {
            anchor-name: --profile-menu;
        }

        /* 2. Tell the popover to pin itself to that anchor */
        #profile-popover {
            /* Reset default browser popover centering */
            position-anchor: --profile-menu;
            inset: auto; 
            
            /* Position logic: top of menu at bottom of anchor, right of menu at right of anchor */
            top: anchor(bottom);
            right: anchor(right);
            
            /* Visual styling */
            margin-top: 0.5rem;
            border: none;
            padding: 0;
            background: transparent;
            overflow: visible;
        }

        /* Standard Popover API needs a display reset when open to respect positioning */
        #profile-popover:popover-open {
            display: block;
        }
    </style>
</head>
<body class="h-full">

    <div class="min-h-full">
        <nav class="bg-gray-800 border-b border-white/10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Home</a>
                                <a href="/about.php" class="<?= $_SERVER['REQUEST_URI'] === '/about.php' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                            </div>
                        </div>
                    </div>

                    <div class="ml-3 relative">
                        <div>
                            <button 
                                popovertarget="profile-popover" 
                                class="profile-trigger flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            >
                                <span class="sr-only">Open user menu</span>
                                <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>

                        <div id="profile-popover" popover>
                            <div class="w-48 rounded-md bg-gray-800 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Settings</a>
                                <div class="h-px bg-white/10 my-1"></div>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div class="px-4 py-6 sm:px-0">
                    <p class="text-gray-400">Hello, welcome to the homepage. This menu now uses the native HTML Popover API combined with CSS Anchor Positioning.</p>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
