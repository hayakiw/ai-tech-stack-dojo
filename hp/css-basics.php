<?php
$page_title = 'CSSの基礎 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：Web制作の基礎知識';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">CSSの基礎</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">CSSはWebページの「見た目」を整える言語です。色、フォント、レイアウトなど、デザインに関するすべてをCSSで制御します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">CSSとは</h2>

            <p class="mb-4">CSS（Cascading Style Sheets）は、HTMLで作った構造に「スタイル」を適用するための言語です。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">HTMLとCSSの役割分担</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded">
                        <h4 class="font-bold text-blue-600 mb-2">HTML = 構造</h4>
                        <p class="text-sm">「これは見出し」「これは段落」という意味を定義</p>
                    </div>
                    <div class="bg-pink-50 p-4 rounded">
                        <h4 class="font-bold text-pink-600 mb-2">CSS = 見た目</h4>
                        <p class="text-sm">「見出しは青色で大きく」「背景は白」とデザインを定義</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">CSSの書き方</h2>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">基本構文：</p>
                <pre class="text-sm overflow-x-auto"><code>セレクタ {
    プロパティ: 値;
    プロパティ: 値;
}

/* 例 */
h1 {
    color: #333333;
    font-size: 32px;
    margin-bottom: 20px;
}</code></pre>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">よく使うプロパティ</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div class="space-y-2">
                        <p class="font-bold text-orange-600">テキスト関連</p>
                        <ul class="space-y-1 text-gray-600">
                            <li><code class="bg-gray-100 px-1">color</code> - 文字色</li>
                            <li><code class="bg-gray-100 px-1">font-size</code> - 文字サイズ</li>
                            <li><code class="bg-gray-100 px-1">font-weight</code> - 太さ</li>
                            <li><code class="bg-gray-100 px-1">text-align</code> - 配置</li>
                        </ul>
                    </div>
                    <div class="space-y-2">
                        <p class="font-bold text-orange-600">ボックス関連</p>
                        <ul class="space-y-1 text-gray-600">
                            <li><code class="bg-gray-100 px-1">background</code> - 背景</li>
                            <li><code class="bg-gray-100 px-1">margin</code> - 外側の余白</li>
                            <li><code class="bg-gray-100 px-1">padding</code> - 内側の余白</li>
                            <li><code class="bg-gray-100 px-1">border</code> - 枠線</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Tailwind CSSという選択肢</h2>

            <p class="mb-4">現代のWeb制作では「Tailwind CSS」というフレームワークがよく使われます。クラス名を付けるだけでスタイリングできます。</p>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">Tailwind CSSの例：</p>
                <pre class="text-sm overflow-x-auto"><code>&lt;!-- 通常のCSS --&gt;
&lt;h1 class="title"&gt;見出し&lt;/h1&gt;
&lt;style&gt;
.title { color: blue; font-size: 24px; font-weight: bold; }
&lt;/style&gt;

&lt;!-- Tailwind CSS --&gt;
&lt;h1 class="text-blue-600 text-2xl font-bold"&gt;見出し&lt;/h1&gt;</code></pre>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>おすすめ：</strong>このサイトもTailwind CSSで作られています。AIにTailwindでコードを書いてもらうと、効率的にデザインできます。</p>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでCSSを書く</h2>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">プロンプト例：</p>
                <pre class="text-sm whitespace-pre-wrap">以下のデザインをTailwind CSSで実装してください。

カード型のコンポーネント：
・白背景に影付き
・角丸（8px程度）
・内側の余白は24px
・タイトルは太字で大きめ
・説明文は灰色
・ホバー時に少し浮き上がるアニメーション

HTMLとTailwindのクラスを使って書いてください。</pre>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>CSSはWebページの見た目を制御する言語</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>セレクタ { プロパティ: 値; } が基本構文</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Tailwind CSSを使うと効率的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AIにデザイン要件を伝えれば自動生成できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="html-basics.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：HTMLの基礎
            </a>
            <a href="responsive.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：レスポンシブデザイン
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
