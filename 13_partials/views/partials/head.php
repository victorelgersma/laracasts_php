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
