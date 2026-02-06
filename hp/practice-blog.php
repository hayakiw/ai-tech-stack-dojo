<?php
$page_title = 'ブログサイト制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブログサイト制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">ブログは情報発信の基盤。SEOで集客し、ファンを増やすための重要なツールです。AIでデザインから記事作成まで効率化しましょう。</p>
        </div>

        <!-- ブログサイトの構成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブログサイトの構成</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🏠</span>
                    <h4 class="font-bold mt-2 mb-1">トップページ</h4>
                    <p class="text-sm text-gray-600">最新記事一覧、人気記事、カテゴリー</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📝</span>
                    <h4 class="font-bold mt-2 mb-1">記事ページ</h4>
                    <p class="text-sm text-gray-600">本文、目次、関連記事、シェアボタン</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📁</span>
                    <h4 class="font-bold mt-2 mb-1">カテゴリーページ</h4>
                    <p class="text-sm text-gray-600">カテゴリー別の記事一覧</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">👤</span>
                    <h4 class="font-bold mt-2 mb-1">プロフィール</h4>
                    <p class="text-sm text-gray-600">運営者情報、SNSリンク</p>
                </div>
            </div>
        </section>

        <!-- 事前準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">事前準備</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">まず、ブログサイト用のプロジェクトフォルダを作成し、Claude Codeを起動します。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">mkdir blog-site && cd blog-site</pre>
                </div>

                <p class="mb-4">フォルダに移動したら、Claude Codeを起動します。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">claude</pre>
                </div>

                <div class="mt-4 bg-orange-50 border-l-4 border-orange-400 p-4 text-sm">
                    <p><strong>ポイント：</strong>Claude Codeはフォルダの中でファイルを作成・編集してくれるので、必ず専用フォルダの中で起動しましょう。</p>
                </div>
            </div>
        </section>

        <!-- Step 1: トップページ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 1: トップページ（記事一覧）を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeへの指示</h3>
                <div class="bg-orange-50 border border-orange-200 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">テックブログのトップページを作成します。index.htmlとして以下を含むページを作成してください。Tailwind CSS CDN使用。ヘッダー（ブログ名「TechNote」、ナビ）、記事一覧（カード型6件、サムネ・タイトル・日付・抜粋）、サイドバー（プロフィール・カテゴリー・人気記事）、フッター</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4">完成コード: index.html</h3>
                <p class="text-sm text-gray-600 mb-4">Claude Codeが以下のようなコードを生成します。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm overflow-x-auto">
                    <pre class="whitespace-pre-wrap"><span class="text-gray-400">&lt;!DOCTYPE html&gt;</span>
<span class="text-gray-400">&lt;html lang="ja"&gt;</span>
<span class="text-gray-400">&lt;head&gt;</span>
    <span class="text-gray-400">&lt;meta charset="UTF-8"&gt;</span>
    <span class="text-gray-400">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
    <span class="text-gray-400">&lt;title&gt;</span>TechNote - テック情報ブログ<span class="text-gray-400">&lt;/title&gt;</span>
    <span class="text-gray-400">&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;</span>
<span class="text-gray-400">&lt;/head&gt;</span>
<span class="text-gray-400">&lt;body class="bg-gray-50 text-gray-800"&gt;</span>

    <span class="text-green-400">&lt;!-- ヘッダー --&gt;</span>
    <span class="text-gray-400">&lt;header class="bg-white shadow-sm sticky top-0 z-50"&gt;</span>
        <span class="text-gray-400">&lt;nav class="container mx-auto px-6 py-4 flex items-center justify-between"&gt;</span>
            <span class="text-gray-400">&lt;a href="index.html" class="text-2xl font-bold text-blue-600"&gt;</span>TechNote<span class="text-gray-400">&lt;/a&gt;</span>
            <span class="text-gray-400">&lt;div class="hidden md:flex space-x-6 text-sm"&gt;</span>
                <span class="text-gray-400">&lt;a href="index.html" class="text-blue-600 font-bold"&gt;</span>ホーム<span class="text-gray-400">&lt;/a&gt;</span>
                <span class="text-gray-400">&lt;a href="#" class="hover:text-blue-600"&gt;</span>カテゴリー<span class="text-gray-400">&lt;/a&gt;</span>
                <span class="text-gray-400">&lt;a href="#" class="hover:text-blue-600"&gt;</span>プロフィール<span class="text-gray-400">&lt;/a&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>
        <span class="text-gray-400">&lt;/nav&gt;</span>
    <span class="text-gray-400">&lt;/header&gt;</span>

    <span class="text-green-400">&lt;!-- メインコンテンツ --&gt;</span>
    <span class="text-gray-400">&lt;div class="container mx-auto px-6 py-10 flex flex-col lg:flex-row gap-10"&gt;</span>

        <span class="text-green-400">&lt;!-- 記事一覧 --&gt;</span>
        <span class="text-gray-400">&lt;main class="flex-1"&gt;</span>
            <span class="text-gray-400">&lt;h1 class="text-3xl font-bold mb-8"&gt;</span>最新の記事<span class="text-gray-400">&lt;/h1&gt;</span>
            <span class="text-gray-400">&lt;div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6"&gt;</span>

                <span class="text-green-400">&lt;!-- 記事カード 1 --&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/600x340/3b82f6/ffffff?text=Web+Design" alt="" class="w-full h-44 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-4"&gt;</span>
                        <span class="text-gray-400">&lt;span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded"&gt;</span>デザイン<span class="text-gray-400">&lt;/span&gt;</span>
                        <span class="text-gray-400">&lt;h2 class="font-bold mt-2 line-clamp-2"&gt;</span>Webデザイン入門：初心者が最初に覚えるべき5つのこと<span class="text-gray-400">&lt;/h2&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400 mt-1 block"&gt;</span>2025-01-15<span class="text-gray-400">&lt;/time&gt;</span>
                        <span class="text-gray-400">&lt;p class="text-sm text-gray-600 mt-2 line-clamp-3"&gt;</span>Webデザインを始めたいけど何から手をつければいいか分からない...そんな初心者の方に向けて、最初に覚えるべきポイントを解説します。<span class="text-gray-400">&lt;/p&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>

                <span class="text-green-400">&lt;!-- 記事カード 2 --&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/600x340/10b981/ffffff?text=JavaScript" alt="" class="w-full h-44 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-4"&gt;</span>
                        <span class="text-gray-400">&lt;span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded"&gt;</span>JavaScript<span class="text-gray-400">&lt;/span&gt;</span>
                        <span class="text-gray-400">&lt;h2 class="font-bold mt-2 line-clamp-2"&gt;</span>JavaScriptの非同期処理を完全理解する<span class="text-gray-400">&lt;/h2&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400 mt-1 block"&gt;</span>2025-01-12<span class="text-gray-400">&lt;/time&gt;</span>
                        <span class="text-gray-400">&lt;p class="text-sm text-gray-600 mt-2 line-clamp-3"&gt;</span>Promise、async/awaitなど、非同期処理の仕組みを初心者にも分かりやすく解説します。<span class="text-gray-400">&lt;/p&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>

                <span class="text-green-400">&lt;!-- 記事カード 3 --&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/600x340/8b5cf6/ffffff?text=CSS+Grid" alt="" class="w-full h-44 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-4"&gt;</span>
                        <span class="text-gray-400">&lt;span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded"&gt;</span>CSS<span class="text-gray-400">&lt;/span&gt;</span>
                        <span class="text-gray-400">&lt;h2 class="font-bold mt-2 line-clamp-2"&gt;</span>CSS Gridで作る実践レイアウト集<span class="text-gray-400">&lt;/h2&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400 mt-1 block"&gt;</span>2025-01-10<span class="text-gray-400">&lt;/time&gt;</span>
                        <span class="text-gray-400">&lt;p class="text-sm text-gray-600 mt-2 line-clamp-3"&gt;</span>CSS Gridを使った実用的なレイアウトパターンを、コード付きで紹介します。<span class="text-gray-400">&lt;/p&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>

                <span class="text-green-400">&lt;!-- 記事カード 4 --&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/600x340/f59e0b/ffffff?text=AI+Tools" alt="" class="w-full h-44 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-4"&gt;</span>
                        <span class="text-gray-400">&lt;span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-1 rounded"&gt;</span>AI<span class="text-gray-400">&lt;/span&gt;</span>
                        <span class="text-gray-400">&lt;h2 class="font-bold mt-2 line-clamp-2"&gt;</span>AI時代のWeb開発ツール最前線<span class="text-gray-400">&lt;/h2&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400 mt-1 block"&gt;</span>2025-01-08<span class="text-gray-400">&lt;/time&gt;</span>
                        <span class="text-gray-400">&lt;p class="text-sm text-gray-600 mt-2 line-clamp-3"&gt;</span>コード生成からデザインまで、AIがWeb開発をどう変えているのかを紹介します。<span class="text-gray-400">&lt;/p&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>

                <span class="text-green-400">&lt;!-- 記事カード 5 --&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/600x340/ef4444/ffffff?text=Git+GitHub" alt="" class="w-full h-44 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-4"&gt;</span>
                        <span class="text-gray-400">&lt;span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded"&gt;</span>開発ツール<span class="text-gray-400">&lt;/span&gt;</span>
                        <span class="text-gray-400">&lt;h2 class="font-bold mt-2 line-clamp-2"&gt;</span>Git入門：チーム開発の第一歩<span class="text-gray-400">&lt;/h2&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400 mt-1 block"&gt;</span>2025-01-05<span class="text-gray-400">&lt;/time&gt;</span>
                        <span class="text-gray-400">&lt;p class="text-sm text-gray-600 mt-2 line-clamp-3"&gt;</span>Gitの基本コマンドからGitHubでの共同開発まで、初心者向けに解説します。<span class="text-gray-400">&lt;/p&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>

                <span class="text-green-400">&lt;!-- 記事カード 6 --&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/600x340/06b6d4/ffffff?text=React" alt="" class="w-full h-44 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-4"&gt;</span>
                        <span class="text-gray-400">&lt;span class="text-xs bg-cyan-100 text-cyan-700 px-2 py-1 rounded"&gt;</span>React<span class="text-gray-400">&lt;/span&gt;</span>
                        <span class="text-gray-400">&lt;h2 class="font-bold mt-2 line-clamp-2"&gt;</span>Reactで作るシンプルなTodoアプリ<span class="text-gray-400">&lt;/h2&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400 mt-1 block"&gt;</span>2025-01-03<span class="text-gray-400">&lt;/time&gt;</span>
                        <span class="text-gray-400">&lt;p class="text-sm text-gray-600 mt-2 line-clamp-3"&gt;</span>React初心者の方に向けて、Todoアプリを一から作る手順を解説します。<span class="text-gray-400">&lt;/p&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>

            <span class="text-gray-400">&lt;/div&gt;</span>
        <span class="text-gray-400">&lt;/main&gt;</span>

        <span class="text-green-400">&lt;!-- サイドバー --&gt;</span>
        <span class="text-gray-400">&lt;aside class="w-full lg:w-80 space-y-6"&gt;</span>

            <span class="text-green-400">&lt;!-- プロフィール --&gt;</span>
            <span class="text-gray-400">&lt;div class="bg-white rounded-lg shadow p-6 text-center"&gt;</span>
                <span class="text-gray-400">&lt;img src="https://placehold.co/100x100/3b82f6/ffffff?text=Author" alt="プロフィール" class="w-20 h-20 rounded-full mx-auto mb-3"&gt;</span>
                <span class="text-gray-400">&lt;h3 class="font-bold"&gt;</span>田中テック<span class="text-gray-400">&lt;/h3&gt;</span>
                <span class="text-gray-400">&lt;p class="text-sm text-gray-500 mt-1"&gt;</span>フロントエンドエンジニア。Web技術やAIについて発信中。<span class="text-gray-400">&lt;/p&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>

            <span class="text-green-400">&lt;!-- カテゴリー --&gt;</span>
            <span class="text-gray-400">&lt;div class="bg-white rounded-lg shadow p-6"&gt;</span>
                <span class="text-gray-400">&lt;h3 class="font-bold mb-3"&gt;</span>カテゴリー<span class="text-gray-400">&lt;/h3&gt;</span>
                <span class="text-gray-400">&lt;ul class="space-y-2 text-sm"&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="#" class="flex justify-between hover:text-blue-600"&gt;</span>デザイン<span class="text-gray-400">&lt;span class="text-gray-400"&gt;</span>8<span class="text-gray-400">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="#" class="flex justify-between hover:text-blue-600"&gt;</span>JavaScript<span class="text-gray-400">&lt;span class="text-gray-400"&gt;</span>12<span class="text-gray-400">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="#" class="flex justify-between hover:text-blue-600"&gt;</span>CSS<span class="text-gray-400">&lt;span class="text-gray-400"&gt;</span>6<span class="text-gray-400">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="#" class="flex justify-between hover:text-blue-600"&gt;</span>AI<span class="text-gray-400">&lt;span class="text-gray-400"&gt;</span>5<span class="text-gray-400">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="#" class="flex justify-between hover:text-blue-600"&gt;</span>開発ツール<span class="text-gray-400">&lt;span class="text-gray-400"&gt;</span>4<span class="text-gray-400">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                <span class="text-gray-400">&lt;/ul&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>

            <span class="text-green-400">&lt;!-- 人気記事 --&gt;</span>
            <span class="text-gray-400">&lt;div class="bg-white rounded-lg shadow p-6"&gt;</span>
                <span class="text-gray-400">&lt;h3 class="font-bold mb-3"&gt;</span>人気記事<span class="text-gray-400">&lt;/h3&gt;</span>
                <span class="text-gray-400">&lt;ul class="space-y-3 text-sm"&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="post.html" class="flex items-start gap-3 hover:text-blue-600"&gt;</span>
                        <span class="text-gray-400">&lt;span class="bg-blue-600 text-white text-xs w-6 h-6 rounded flex items-center justify-center flex-shrink-0"&gt;</span>1<span class="text-gray-400">&lt;/span&gt;</span>
                        Webデザイン入門：初心者が最初に覚えるべき5つのこと
                    <span class="text-gray-400">&lt;/a&gt;&lt;/li&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="post.html" class="flex items-start gap-3 hover:text-blue-600"&gt;</span>
                        <span class="text-gray-400">&lt;span class="bg-blue-600 text-white text-xs w-6 h-6 rounded flex items-center justify-center flex-shrink-0"&gt;</span>2<span class="text-gray-400">&lt;/span&gt;</span>
                        JavaScriptの非同期処理を完全理解する
                    <span class="text-gray-400">&lt;/a&gt;&lt;/li&gt;</span>
                    <span class="text-gray-400">&lt;li&gt;&lt;a href="post.html" class="flex items-start gap-3 hover:text-blue-600"&gt;</span>
                        <span class="text-gray-400">&lt;span class="bg-blue-600 text-white text-xs w-6 h-6 rounded flex items-center justify-center flex-shrink-0"&gt;</span>3<span class="text-gray-400">&lt;/span&gt;</span>
                        CSS Gridで作る実践レイアウト集
                    <span class="text-gray-400">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="text-gray-400">&lt;/ul&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>

        <span class="text-gray-400">&lt;/aside&gt;</span>
    <span class="text-gray-400">&lt;/div&gt;</span>

    <span class="text-green-400">&lt;!-- フッター --&gt;</span>
    <span class="text-gray-400">&lt;footer class="bg-gray-800 text-gray-300 py-8 mt-16"&gt;</span>
        <span class="text-gray-400">&lt;div class="container mx-auto px-6 text-center text-sm"&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>&amp;copy; 2025 TechNote. All rights reserved.<span class="text-gray-400">&lt;/p&gt;</span>
        <span class="text-gray-400">&lt;/div&gt;</span>
    <span class="text-gray-400">&lt;/footer&gt;</span>

<span class="text-gray-400">&lt;/body&gt;</span>
<span class="text-gray-400">&lt;/html&gt;</span></pre>
                </div>
            </div>

            <div class="bg-orange-50 border-l-4 border-orange-400 p-4 text-sm">
                <p><strong>ポイント：</strong>Claude Codeは指示に基づいてファイルを自動作成します。コードが長くても、すべて一度に生成されるので心配ありません。プレースホルダー画像には <code>placehold.co</code> を使用しています。</p>
            </div>
        </section>

        <!-- Step 2: 記事ページ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 2: 記事ページを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeへの指示</h3>
                <div class="bg-orange-50 border border-orange-200 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">ブログの記事詳細ページをpost.htmlとして作成してください。記事タイトル、投稿日・カテゴリー・読了時間、アイキャッチ画像、本文（見出し・段落・コードブロック・リスト含む）、著者プロフィール、関連記事3件</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4">完成コード: post.html</h3>
                <p class="text-sm text-gray-600 mb-4">Claude Codeが以下のようなコードを生成します。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm overflow-x-auto">
                    <pre class="whitespace-pre-wrap"><span class="text-gray-400">&lt;!DOCTYPE html&gt;</span>
<span class="text-gray-400">&lt;html lang="ja"&gt;</span>
<span class="text-gray-400">&lt;head&gt;</span>
    <span class="text-gray-400">&lt;meta charset="UTF-8"&gt;</span>
    <span class="text-gray-400">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
    <span class="text-gray-400">&lt;title&gt;</span>Webデザイン入門：初心者が最初に覚えるべき5つのこと - TechNote<span class="text-gray-400">&lt;/title&gt;</span>
    <span class="text-gray-400">&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;</span>
<span class="text-gray-400">&lt;/head&gt;</span>
<span class="text-gray-400">&lt;body class="bg-gray-50 text-gray-800"&gt;</span>

    <span class="text-green-400">&lt;!-- ヘッダー --&gt;</span>
    <span class="text-gray-400">&lt;header class="bg-white shadow-sm sticky top-0 z-50"&gt;</span>
        <span class="text-gray-400">&lt;nav class="container mx-auto px-6 py-4 flex items-center justify-between"&gt;</span>
            <span class="text-gray-400">&lt;a href="index.html" class="text-2xl font-bold text-blue-600"&gt;</span>TechNote<span class="text-gray-400">&lt;/a&gt;</span>
            <span class="text-gray-400">&lt;div class="hidden md:flex space-x-6 text-sm"&gt;</span>
                <span class="text-gray-400">&lt;a href="index.html" class="hover:text-blue-600"&gt;</span>ホーム<span class="text-gray-400">&lt;/a&gt;</span>
                <span class="text-gray-400">&lt;a href="#" class="hover:text-blue-600"&gt;</span>カテゴリー<span class="text-gray-400">&lt;/a&gt;</span>
                <span class="text-gray-400">&lt;a href="#" class="hover:text-blue-600"&gt;</span>プロフィール<span class="text-gray-400">&lt;/a&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>
        <span class="text-gray-400">&lt;/nav&gt;</span>
    <span class="text-gray-400">&lt;/header&gt;</span>

    <span class="text-green-400">&lt;!-- 記事コンテンツ --&gt;</span>
    <span class="text-gray-400">&lt;main class="container mx-auto px-6 py-10 max-w-3xl"&gt;</span>

        <span class="text-green-400">&lt;!-- 記事メタ情報 --&gt;</span>
        <span class="text-gray-400">&lt;div class="mb-6"&gt;</span>
            <span class="text-gray-400">&lt;span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded"&gt;</span>デザイン<span class="text-gray-400">&lt;/span&gt;</span>
            <span class="text-gray-400">&lt;h1 class="text-3xl font-bold mt-3 mb-4"&gt;</span>Webデザイン入門：初心者が最初に覚えるべき5つのこと<span class="text-gray-400">&lt;/h1&gt;</span>
            <span class="text-gray-400">&lt;div class="flex items-center text-sm text-gray-500 space-x-4"&gt;</span>
                <span class="text-gray-400">&lt;time&gt;</span>2025年1月15日<span class="text-gray-400">&lt;/time&gt;</span>
                <span class="text-gray-400">&lt;span&gt;</span>・<span class="text-gray-400">&lt;/span&gt;</span>
                <span class="text-gray-400">&lt;span&gt;</span>読了時間：約5分<span class="text-gray-400">&lt;/span&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>
        <span class="text-gray-400">&lt;/div&gt;</span>

        <span class="text-green-400">&lt;!-- アイキャッチ画像 --&gt;</span>
        <span class="text-gray-400">&lt;img src="https://placehold.co/800x400/3b82f6/ffffff?text=Web+Design+Basics" alt="アイキャッチ" class="w-full rounded-lg mb-8"&gt;</span>

        <span class="text-green-400">&lt;!-- 本文 --&gt;</span>
        <span class="text-gray-400">&lt;article class="space-y-6 text-gray-700 leading-relaxed"&gt;</span>

            <span class="text-gray-400">&lt;p&gt;</span>Webデザインを始めたいけれど、何から手をつければいいか分からない。そんな初心者の方も多いのではないでしょうか。この記事では、Webデザインの基礎として最初に覚えるべき5つのポイントを紹介します。<span class="text-gray-400">&lt;/p&gt;</span>

            <span class="text-gray-400">&lt;h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800"&gt;</span>1. レイアウトの基本を理解する<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>Webページは「ヘッダー」「メインコンテンツ」「サイドバー」「フッター」の4つの領域で構成されるのが一般的です。まずはこの基本構造を理解しましょう。<span class="text-gray-400">&lt;/p&gt;</span>

            <span class="text-gray-400">&lt;h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800"&gt;</span>2. 配色のルールを覚える<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>使う色は3色以内に抑えるのがコツです。メインカラー・サブカラー・アクセントカラーの3つを決めましょう。<span class="text-gray-400">&lt;/p&gt;</span>
            <span class="text-gray-400">&lt;ul class="list-disc pl-6 space-y-2"&gt;</span>
                <span class="text-gray-400">&lt;li&gt;</span>メインカラー：サイト全体の印象を決める色（60%）<span class="text-gray-400">&lt;/li&gt;</span>
                <span class="text-gray-400">&lt;li&gt;</span>サブカラー：メインを引き立てる色（30%）<span class="text-gray-400">&lt;/li&gt;</span>
                <span class="text-gray-400">&lt;li&gt;</span>アクセントカラー：ボタンやリンクに使う色（10%）<span class="text-gray-400">&lt;/li&gt;</span>
            <span class="text-gray-400">&lt;/ul&gt;</span>

            <span class="text-gray-400">&lt;h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800"&gt;</span>3. フォント選びのポイント<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>読みやすさが最優先です。本文にはゴシック体を使い、フォントサイズは16px以上を基本にしましょう。<span class="text-gray-400">&lt;/p&gt;</span>

            <span class="text-gray-400">&lt;h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800"&gt;</span>4. レスポンシブ対応を意識する<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>スマートフォンからのアクセスが主流です。Tailwind CSSなどのフレームワークを使えば簡単に対応できます。<span class="text-gray-400">&lt;/p&gt;</span>
            <span class="text-gray-400">&lt;div class="bg-gray-900 text-gray-100 p-4 rounded-lg text-sm"&gt;</span>
                <span class="text-gray-400">&lt;pre&gt;</span>&lt;!-- Tailwind CSSのレスポンシブ例 --&gt;
&lt;div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"&gt;
  &lt;!-- スマホ1列 → タブレット2列 → PC3列 --&gt;
&lt;/div&gt;<span class="text-gray-400">&lt;/pre&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>

            <span class="text-gray-400">&lt;h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800"&gt;</span>5. 余白（ホワイトスペース）を大切にする<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>要素と要素の間に十分な余白を取ることで、ぐっと見やすいデザインになります。詰め込みすぎは禁物です。<span class="text-gray-400">&lt;/p&gt;</span>

            <span class="text-gray-400">&lt;h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800"&gt;</span>まとめ<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>Webデザインは奥が深いですが、まずはこの5つの基本を押さえるだけで、見違えるほど良いデザインが作れるようになります。ぜひ実践してみてください。<span class="text-gray-400">&lt;/p&gt;</span>

        <span class="text-gray-400">&lt;/article&gt;</span>

        <span class="text-green-400">&lt;!-- 著者プロフィール --&gt;</span>
        <span class="text-gray-400">&lt;div class="bg-white rounded-lg shadow p-6 mt-12 flex items-center gap-4"&gt;</span>
            <span class="text-gray-400">&lt;img src="https://placehold.co/80x80/3b82f6/ffffff?text=Author" alt="著者" class="w-16 h-16 rounded-full"&gt;</span>
            <span class="text-gray-400">&lt;div&gt;</span>
                <span class="text-gray-400">&lt;p class="font-bold"&gt;</span>田中テック<span class="text-gray-400">&lt;/p&gt;</span>
                <span class="text-gray-400">&lt;p class="text-sm text-gray-500"&gt;</span>フロントエンドエンジニア。Web技術やAIについて発信中。<span class="text-gray-400">&lt;/p&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>
        <span class="text-gray-400">&lt;/div&gt;</span>

        <span class="text-green-400">&lt;!-- 関連記事 --&gt;</span>
        <span class="text-gray-400">&lt;div class="mt-12"&gt;</span>
            <span class="text-gray-400">&lt;h2 class="text-xl font-bold mb-6"&gt;</span>関連記事<span class="text-gray-400">&lt;/h2&gt;</span>
            <span class="text-gray-400">&lt;div class="grid md:grid-cols-3 gap-4"&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/400x225/8b5cf6/ffffff?text=CSS" alt="" class="w-full h-32 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-3"&gt;</span>
                        <span class="text-gray-400">&lt;h3 class="font-bold text-sm line-clamp-2"&gt;</span>CSS Gridで作る実践レイアウト集<span class="text-gray-400">&lt;/h3&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400"&gt;</span>2025-01-10<span class="text-gray-400">&lt;/time&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/400x225/10b981/ffffff?text=JavaScript" alt="" class="w-full h-32 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-3"&gt;</span>
                        <span class="text-gray-400">&lt;h3 class="font-bold text-sm line-clamp-2"&gt;</span>JavaScriptの非同期処理を完全理解する<span class="text-gray-400">&lt;/h3&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400"&gt;</span>2025-01-12<span class="text-gray-400">&lt;/time&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>
                <span class="text-gray-400">&lt;a href="post.html" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden"&gt;</span>
                    <span class="text-gray-400">&lt;img src="https://placehold.co/400x225/f59e0b/ffffff?text=AI+Tools" alt="" class="w-full h-32 object-cover"&gt;</span>
                    <span class="text-gray-400">&lt;div class="p-3"&gt;</span>
                        <span class="text-gray-400">&lt;h3 class="font-bold text-sm line-clamp-2"&gt;</span>AI時代のWeb開発ツール最前線<span class="text-gray-400">&lt;/h3&gt;</span>
                        <span class="text-gray-400">&lt;time class="text-xs text-gray-400"&gt;</span>2025-01-08<span class="text-gray-400">&lt;/time&gt;</span>
                    <span class="text-gray-400">&lt;/div&gt;</span>
                <span class="text-gray-400">&lt;/a&gt;</span>
            <span class="text-gray-400">&lt;/div&gt;</span>
        <span class="text-gray-400">&lt;/div&gt;</span>

    <span class="text-gray-400">&lt;/main&gt;</span>

    <span class="text-green-400">&lt;!-- フッター --&gt;</span>
    <span class="text-gray-400">&lt;footer class="bg-gray-800 text-gray-300 py-8 mt-16"&gt;</span>
        <span class="text-gray-400">&lt;div class="container mx-auto px-6 text-center text-sm"&gt;</span>
            <span class="text-gray-400">&lt;p&gt;</span>&amp;copy; 2025 TechNote. All rights reserved.<span class="text-gray-400">&lt;/p&gt;</span>
        <span class="text-gray-400">&lt;/div&gt;</span>
    <span class="text-gray-400">&lt;/footer&gt;</span>

<span class="text-gray-400">&lt;/body&gt;</span>
<span class="text-gray-400">&lt;/html&gt;</span></pre>
                </div>
            </div>

            <div class="bg-orange-50 border-l-4 border-orange-400 p-4 text-sm">
                <p><strong>ポイント：</strong>記事ページでは読みやすさが最重要です。見出し・段落・リスト・コードブロックなど、複数の要素を組み合わせることで、読者にとって分かりやすい記事になります。</p>
            </div>
        </section>

        <!-- ブラウザで確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブラウザで確認</h2>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4 text-green-700">確認チェックリスト</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-bold mb-2">1. index.html を開く</h4>
                        <p class="text-sm text-gray-700 mb-2"><code>blog-site</code> フォルダ内の <code>index.html</code> をブラウザで開きます。</p>
                        <ul class="text-sm text-gray-600 space-y-1 ml-4">
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>ヘッダーに「TechNote」のロゴとナビが表示されるか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>記事カードが6件、グリッド状に並んでいるか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>サイドバーにプロフィール・カテゴリー・人気記事が表示されるか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>カードにホバーすると影が変化するか</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">2. post.html を開く</h4>
                        <p class="text-sm text-gray-700 mb-2">同じフォルダ内の <code>post.html</code> をブラウザで開きます。</p>
                        <ul class="text-sm text-gray-600 space-y-1 ml-4">
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>記事タイトル・日付・読了時間が表示されるか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>本文の見出し・段落・リスト・コードブロックが正しく表示されるか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>著者プロフィールと関連記事が表示されるか</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">3. レスポンシブ確認</h4>
                        <p class="text-sm text-gray-700 mb-2">ブラウザの幅を狭くして、スマートフォン表示を確認します。</p>
                        <ul class="text-sm text-gray-600 space-y-1 ml-4">
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>記事カードが1列に並び変わるか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>サイドバーがメインコンテンツの下に移動するか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>文字が小さすぎず読みやすいか</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">4. ページ間の移動</h4>
                        <p class="text-sm text-gray-700 mb-2">リンクが正しく動作するか確認します。</p>
                        <ul class="text-sm text-gray-600 space-y-1 ml-4">
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>トップページの記事カードをクリックすると post.html に遷移するか</li>
                            <li class="flex items-start"><span class="text-green-600 mr-2">✓</span>記事ページのヘッダー「TechNote」をクリックするとトップに戻れるか</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- カスタマイズ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">カスタマイズ</h2>

            <p class="mb-4">基本のブログができたら、自分好みにカスタマイズしましょう。Claude Codeに追加の指示を出すだけで変更できます。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeへの指示例</h3>
                <div class="bg-orange-50 border border-orange-200 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">ブログのデザインを以下のようにカスタマイズしてください。

・ブログ名を「TechNote」から「My Tech Blog」に変更
・ヘッダーの背景色を紺色（#1e3a5f）に変更
・カテゴリーを「HTML/CSS」「JavaScript」「Python」「AI活用」「キャリア」に変更
・フッターにSNSリンク（Twitter、GitHub）を追加</pre>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">ブログ名・ロゴ</h4>
                    <p class="text-sm text-gray-600">サイト名を自分のブランドに合わせて変更</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">カラーテーマ</h4>
                    <p class="text-sm text-gray-600">ヘッダーやリンクの色をブランドカラーに統一</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">カテゴリー</h4>
                    <p class="text-sm text-gray-600">自分が発信したいジャンルに合わせて変更</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">プロフィール</h4>
                    <p class="text-sm text-gray-600">自分の名前・紹介文・SNSリンクに差し替え</p>
                </div>
            </div>
        </section>

        <!-- よくあるエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくあるエラー</h2>

            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4 text-red-700">トラブルシューティング</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-bold text-red-600 mb-1">画像が表示されない</h4>
                        <p class="text-sm text-gray-700">プレースホルダー画像はインターネット接続が必要です。オフラインの場合は表示されません。自分の画像を使う場合は、ファイルパスが正しいか確認してください。</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-600 mb-1">レイアウトが崩れる</h4>
                        <p class="text-sm text-gray-700">Tailwind CSS CDNが読み込まれているか確認してください。<code>&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;</code> が <code>&lt;head&gt;</code> 内にあるか確認しましょう。</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-600 mb-1">リンクが動かない</h4>
                        <p class="text-sm text-gray-700"><code>index.html</code> と <code>post.html</code> が同じフォルダにあるか確認してください。ファイル名の大文字・小文字も区別されます。</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-600 mb-1">スマホ表示で横スクロールが出る</h4>
                        <p class="text-sm text-gray-700"><code>&lt;meta name="viewport"&gt;</code> タグが <code>&lt;head&gt;</code> 内にあるか確認してください。また、画像や要素に固定幅（px指定）が設定されている場合は <code>max-w-full</code> を追加しましょう。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ブログ記事もAIで作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブログ記事もAIで作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">記事の下書きを生成</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のテーマでブログ記事を作成してください。

【テーマ】初心者向けWebデザインの始め方
【想定読者】Webデザインに興味がある未経験者
【文字数】2000文字程度
【構成】
- 導入（フックと記事の概要）
- 本文（見出し3〜5個）
- まとめ

SEOを意識して、見出しにはキーワードを含めてください。</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>注意：</strong>AIの出力はそのまま使わず、自分の経験や独自の視点を加えて編集しましょう。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>トップ、記事ページ、カテゴリーが基本構成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>カード型の記事一覧が見やすい</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>記事の下書きもAIで効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AI出力は必ず編集してオリジナリティを追加</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-lp.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：LP制作
            </a>
            <a href="publish.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：公開と運用
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
