<?php /** @var \ConfettiCode\ErrorHandler\Decorator $decorator */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <?php echo \ConfettiCode\ErrorHandler\Helper::styleTag(); ?>
</head>
<body class="bg-gray-200/80 font-sans antialiased dark:bg-gray-950/95">
<div class="mx-auto lg:px-8">
    <main class="lg:mx-64 px-6 pb-12 pt-6">
        <div class="mx-auto">
            <?php require __DIR__ . '/partials/header.php'; ?>
            <?php require __DIR__ . '/partials/frames.php'; ?>
        </div>
    </main>
</div>

<?php echo \ConfettiCode\ErrorHandler\Helper::scriptTag(); ?>

<script>
    hljs.highlightAll();
    hljs.initLineNumbersOnLoad();

    // document.addEventListener('DOMContentLoaded', function () {
    //     const codeElements = document.getElementsByTagName('code');
    //
    //     console.log(codeElements);
    //     for (const codeElement of codeElements) {
    //         hljs.lineNumbersBlock(codeElement);
    //     }
    // });
</script>

<style>
    .hljs {
        background: white;
        padding-top: 0;
    }
    .hljs-ln {
        width: 100%;
    }
    .hljs-ln td {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }
    .hljs-ln-numbers {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    .hljs-ln tr:hover .hljs-ln-line {
        background: rgba(242, 95, 95, 0.4);
    }

    <?php foreach ($decorator->getStackFrames() as $index => $frame): ?>
        #frame-<?php echo $index ?> .hljs-ln td[data-line-number="<?php echo $frame->getLine(); ?>"] {
            background: rgba(242, 95, 95, 0.4);
        }
    <?php endforeach; ?>
</style>
</body>
</html>
