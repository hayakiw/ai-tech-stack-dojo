<?php
$page_title = 'HTML/CSS基礎 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：Web開発の基礎知識';
$step_number = 2;
$total_steps = 20;
$extra_styles = '
        .code-block {
            background: #1e293b;
            color: #e2e8f0;
        }
        .tag { color: #f472b6; }
        .attr { color: #a5b4fc; }
        .value { color: #86efac; }
        .comment { color: #64748b; }
        .property { color: #93c5fd; }
        .css-value { color: #fcd34d; }
';

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">HTML/CSS基礎</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">HTMLは「構造」、CSSは「見た目」を担当します。この2つを理解すれば、Webページがどう作られているか分かるようになります。</p>
        </div>

        <!-- セクション1: HTMLの基本 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">HTMLの基本</h2>

            <h3 class="text-xl font-bold mb-4">HTMLとは</h3>
            <p class="mb-4">HTML（HyperText Markup Language）は、Webページの「骨組み」を作る言語です。タグを使って、テキストや画像に意味を持たせます。</p>

            <h3 class="text-xl font-bold mb-4 mt-8">HTMLの基本構造</h3>
            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="tag">&lt;!DOCTYPE html&gt;</span>
<span class="tag">&lt;html</span> <span class="attr">lang</span>=<span class="value">"ja"</span><span class="tag">&gt;</span>
<span class="tag">&lt;head&gt;</span>
    <span class="tag">&lt;meta</span> <span class="attr">charset</span>=<span class="value">"UTF-8"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;title&gt;</span>ページのタイトル<span class="tag">&lt;/title&gt;</span>
<span class="tag">&lt;/head&gt;</span>
<span class="tag">&lt;body&gt;</span>
    <span class="comment">&lt;!-- ここに表示したい内容を書く --&gt;</span>
    <span class="tag">&lt;h1&gt;</span>こんにちは<span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;p&gt;</span>これは段落です。<span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/body&gt;</span>
<span class="tag">&lt;/html&gt;</span></pre>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <table class="w-full text-left text-sm">
                    <tr class="border-b">
                        <td class="py-2 font-mono text-purple-600">&lt;!DOCTYPE html&gt;</td>
                        <td class="py-2">「これはHTML5です」という宣言</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 font-mono text-purple-600">&lt;html&gt;</td>
                        <td class="py-2">HTML文書全体を囲む</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 font-mono text-purple-600">&lt;head&gt;</td>
                        <td class="py-2">ページの設定情報（タイトル等）</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-mono text-purple-600">&lt;body&gt;</td>
                        <td class="py-2">実際に画面に表示される内容</td>
                    </tr>
                </table>
            </div>

            <h3 class="text-xl font-bold mb-4 mt-8">よく使うタグ</h3>
            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">見出し</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="tag">&lt;h1&gt;</span>大見出し<span class="tag">&lt;/h1&gt;</span>
<span class="tag">&lt;h2&gt;</span>中見出し<span class="tag">&lt;/h2&gt;</span>
<span class="tag">&lt;h3&gt;</span>小見出し<span class="tag">&lt;/h3&gt;</span></pre>
                    </div>
                    <p class="text-sm text-gray-600">h1〜h6まであり、数字が小さいほど大きい見出し</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">段落・テキスト</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="tag">&lt;p&gt;</span>段落テキスト<span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;span&gt;</span>インライン要素<span class="tag">&lt;/span&gt;</span>
<span class="tag">&lt;strong&gt;</span>太字<span class="tag">&lt;/strong&gt;</span></pre>
                    </div>
                    <p class="text-sm text-gray-600">pは段落、spanはテキストの一部を囲む</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">リンク・画像</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="value">"https://..."</span><span class="tag">&gt;</span>リンク<span class="tag">&lt;/a&gt;</span>
<span class="tag">&lt;img</span> <span class="attr">src</span>=<span class="value">"image.jpg"</span> <span class="attr">alt</span>=<span class="value">"説明"</span><span class="tag">&gt;</span></pre>
                    </div>
                    <p class="text-sm text-gray-600">aはリンク、imgは画像を表示</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">リスト</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="tag">&lt;ul&gt;</span>
  <span class="tag">&lt;li&gt;</span>項目1<span class="tag">&lt;/li&gt;</span>
  <span class="tag">&lt;li&gt;</span>項目2<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span></pre>
                    </div>
                    <p class="text-sm text-gray-600">ulは箇条書き、olは番号付きリスト</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">コンテナ</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="tag">&lt;div&gt;</span>ブロック要素<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;section&gt;</span>セクション<span class="tag">&lt;/section&gt;</span>
<span class="tag">&lt;header&gt;</span>ヘッダー<span class="tag">&lt;/header&gt;</span></pre>
                    </div>
                    <p class="text-sm text-gray-600">要素をまとめるための箱</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">フォーム</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="tag">&lt;input</span> <span class="attr">type</span>=<span class="value">"text"</span><span class="tag">&gt;</span>
<span class="tag">&lt;button&gt;</span>送信<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;textarea&gt;&lt;/textarea&gt;</span></pre>
                    </div>
                    <p class="text-sm text-gray-600">ユーザーの入力を受け付ける</p>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4 mt-8">属性（Attribute）とは</h3>
            <p class="mb-4">タグに追加情報を与えるものを「属性」と呼びます。</p>
            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm">
<pre><span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="value">"https://example.com"</span> <span class="attr">class</span>=<span class="value">"link"</span> <span class="attr">id</span>=<span class="value">"main-link"</span><span class="tag">&gt;</span>
  リンクテキスト
<span class="tag">&lt;/a&gt;</span></pre>
            </div>
            <ul class="list-disc list-inside space-y-2">
                <li><strong>href</strong>：リンク先のURL</li>
                <li><strong>class</strong>：CSSでスタイルを当てるための名前（複数の要素で共有可能）</li>
                <li><strong>id</strong>：要素を一意に識別する名前（ページ内で唯一）</li>
                <li><strong>src</strong>：画像やスクリプトのファイルパス</li>
            </ul>
        </section>

        <!-- セクション2: CSSの基本 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">CSSの基本</h2>

            <h3 class="text-xl font-bold mb-4">CSSとは</h3>
            <p class="mb-4">CSS（Cascading Style Sheets）は、HTMLの見た目を装飾する言語です。色、サイズ、配置などを指定できます。</p>

            <h3 class="text-xl font-bold mb-4 mt-8">CSSの書き方</h3>
            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="comment">/* セレクタ { プロパティ: 値; } */</span>

<span class="tag">h1</span> {
  <span class="property">color</span>: <span class="css-value">blue</span>;
  <span class="property">font-size</span>: <span class="css-value">24px</span>;
}

<span class="tag">.button</span> {
  <span class="property">background-color</span>: <span class="css-value">#3b82f6</span>;
  <span class="property">padding</span>: <span class="css-value">10px 20px</span>;
  <span class="property">border-radius</span>: <span class="css-value">8px</span>;
}

<span class="tag">#header</span> {
  <span class="property">height</span>: <span class="css-value">60px</span>;
}</pre>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <table class="w-full text-left text-sm">
                    <tr class="border-b">
                        <td class="py-2 font-mono text-purple-600">h1</td>
                        <td class="py-2">タグ名で選択（すべてのh1）</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 font-mono text-purple-600">.button</td>
                        <td class="py-2">クラス名で選択（.をつける）</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-mono text-purple-600">#header</td>
                        <td class="py-2">ID名で選択（#をつける）</td>
                    </tr>
                </table>
            </div>

            <h3 class="text-xl font-bold mb-4 mt-8">よく使うプロパティ</h3>
            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">色</h4>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="property">color</span>: <span class="css-value">red</span>;         <span class="comment">/* 文字色 */</span>
<span class="property">background-color</span>: <span class="css-value">#fff</span>; <span class="comment">/* 背景色 */</span></pre>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">サイズ</h4>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="property">width</span>: <span class="css-value">100px</span>;   <span class="comment">/* 横幅 */</span>
<span class="property">height</span>: <span class="css-value">50px</span>;  <span class="comment">/* 高さ */</span>
<span class="property">font-size</span>: <span class="css-value">16px</span>; <span class="comment">/* 文字サイズ */</span></pre>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">余白</h4>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="property">margin</span>: <span class="css-value">10px</span>;   <span class="comment">/* 外側の余白 */</span>
<span class="property">padding</span>: <span class="css-value">20px</span>;  <span class="comment">/* 内側の余白 */</span></pre>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-purple-600">レイアウト</h4>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="property">display</span>: <span class="css-value">flex</span>;  <span class="comment">/* 横並び */</span>
<span class="property">justify-content</span>: <span class="css-value">center</span>;
<span class="property">align-items</span>: <span class="css-value">center</span>;</pre>
                    </div>
                </div>
            </div>

            <!-- 余白の図解 -->
            <h3 class="text-xl font-bold mb-4 mt-8">marginとpaddingの違い</h3>
            <div class="bg-gray-100 p-8 rounded-lg mb-6">
                <div class="bg-yellow-200 p-4 text-center">
                    <span class="text-sm">margin（外側の余白）</span>
                    <div class="bg-blue-200 p-4 mt-2">
                        <span class="text-sm">padding（内側の余白）</span>
                        <div class="bg-white p-4 mt-2">
                            <span class="font-bold">コンテンツ</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3: Tailwind CSS -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Tailwind CSSの紹介</h2>

            <p class="mb-4">Tailwind CSSは、あらかじめ用意されたクラス名をHTMLに書くだけでスタイリングできるCSSフレームワークです。</p>

            <h3 class="text-xl font-bold mb-4 mt-6">通常のCSSとの比較</h3>
            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-red-600">通常のCSS</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="comment">&lt;!-- HTML --&gt;</span>
<span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="value">"btn"</span><span class="tag">&gt;</span>ボタン<span class="tag">&lt;/button&gt;</span>

<span class="comment">/* CSS */</span>
<span class="tag">.btn</span> {
  <span class="property">background</span>: <span class="css-value">blue</span>;
  <span class="property">color</span>: <span class="css-value">white</span>;
  <span class="property">padding</span>: <span class="css-value">8px 16px</span>;
  <span class="property">border-radius</span>: <span class="css-value">4px</span>;
}</pre>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-green-600">Tailwind CSS</h4>
                    <div class="code-block p-2 rounded text-sm font-mono mb-2">
<pre><span class="comment">&lt;!-- HTMLだけでOK --&gt;</span>
<span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="value">"bg-blue-500 text-white
  px-4 py-2 rounded"</span><span class="tag">&gt;</span>
  ボタン
<span class="tag">&lt;/button&gt;</span></pre>
                    </div>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4 mt-6">よく使うTailwindクラス</h3>
            <div class="bg-white p-4 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-2">カテゴリ</th>
                            <th class="p-2">クラス例</th>
                            <th class="p-2">意味</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-2 font-bold">色</td>
                            <td class="p-2 font-mono text-sm">text-blue-500, bg-red-100</td>
                            <td class="p-2">文字色、背景色</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 font-bold">余白</td>
                            <td class="p-2 font-mono text-sm">p-4, m-2, px-6, py-3</td>
                            <td class="p-2">padding, margin</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 font-bold">サイズ</td>
                            <td class="p-2 font-mono text-sm">w-full, h-10, text-lg</td>
                            <td class="p-2">幅、高さ、文字サイズ</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 font-bold">レイアウト</td>
                            <td class="p-2 font-mono text-sm">flex, grid, justify-center</td>
                            <td class="p-2">配置方法</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-2 font-bold">角丸</td>
                            <td class="p-2 font-mono text-sm">rounded, rounded-lg</td>
                            <td class="p-2">角を丸くする</td>
                        </tr>
                        <tr>
                            <td class="p-2 font-bold">影</td>
                            <td class="p-2 font-mono text-sm">shadow, shadow-lg</td>
                            <td class="p-2">影をつける</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mt-6">
                <p><strong>ポイント：</strong>Next.jsではTailwind CSSがよく使われます。AIにスタイリングを依頼するときも「Tailwindで」と指定すると効率的です。</p>
            </div>
        </section>

        <!-- セクション4: 開発者ツール -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">開発者ツールでコードを見る</h2>

            <p class="mb-4">ブラウザには、Webページの構造を確認できる「開発者ツール」が搭載されています。</p>

            <h3 class="text-xl font-bold mb-4">開き方</h3>
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <ul class="space-y-2">
                    <li><strong>Windows:</strong> F12 または Ctrl + Shift + I</li>
                    <li><strong>Mac:</strong> Cmd + Option + I</li>
                    <li>または右クリック →「検証」</li>
                </ul>
            </div>

            <h3 class="text-xl font-bold mb-4">できること</h3>
            <ul class="list-disc list-inside space-y-2 mb-6">
                <li>HTMLの構造を確認する</li>
                <li>適用されているCSSを見る</li>
                <li>一時的にスタイルを変更して試す</li>
                <li>エラーメッセージを確認する（Console）</li>
            </ul>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>おすすめ：</strong>気になるWebサイトがあったら、開発者ツールで「どうやって作られているか」を覗いてみましょう。</p>
            </div>
        </section>

        <!-- 練習問題 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200 text-green-700">練習問題</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q1. 次のHTMLで、「リンク」と表示されるのはどこ？</h3>
                    <div class="code-block p-2 rounded mb-3 font-mono text-sm">
<pre><span class="tag">&lt;a</span> <span class="attr">href</span>=<span class="value">"https://example.com"</span><span class="tag">&gt;</span>リンク<span class="tag">&lt;/a&gt;</span></pre>
                    </div>
                    <div class="space-y-2" id="q1">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="a" class="mr-3">
                            <span>A. href属性の中</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="b" class="mr-3">
                            <span>B. タグとタグの間のテキスト</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="c" class="mr-3">
                            <span>C. aタグの属性名</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q1', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q1-result" class="mt-3 hidden"></div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q2. CSSで「.menu」というセレクタは何を選択する？</h3>
                    <div class="space-y-2" id="q2">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="a" class="mr-3">
                            <span>A. id="menu"を持つ要素</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="b" class="mr-3">
                            <span>B. class="menu"を持つ要素</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="c" class="mr-3">
                            <span>C. &lt;menu&gt;タグ</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q2', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q2-result" class="mt-3 hidden"></div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q3. Tailwind CSSで「px-4」は何を意味する？</h3>
                    <div class="space-y-2" id="q3">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="a" class="mr-3">
                            <span>A. 横幅4px</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="b" class="mr-3">
                            <span>B. 左右のpadding</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="c" class="mr-3">
                            <span>C. 上下のpadding</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q3', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q3-result" class="mt-3 hidden"></div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">まとめ</h2>
            <div class="bg-purple-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>HTMLはタグを使ってWebページの構造を作る</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>CSSはセレクタでHTML要素を選び、プロパティで見た目を指定する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>classとidで要素に名前をつけ、CSSで装飾する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>Tailwind CSSを使うと、クラス名だけでスタイリングできる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>開発者ツールで既存サイトの構造を確認できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="web-basics.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：Webの仕組み
            </a>
            <a href="js-basics.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700">
                次へ：JavaScript基礎
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    <script>
        function checkAnswer(questionId, correctAnswer, button) {
            const selected = document.querySelector(`input[name="${questionId}"]:checked`);
            const resultDiv = document.getElementById(`${questionId}-result`);

            if (!selected) {
                resultDiv.innerHTML = '<p class="text-yellow-600">選択肢を選んでください</p>';
                resultDiv.classList.remove('hidden');
                return;
            }

            if (selected.value === correctAnswer) {
                resultDiv.innerHTML = '<p class="text-green-600 font-bold">正解です！</p>';
            } else {
                resultDiv.innerHTML = '<p class="text-red-600">不正解です。もう一度考えてみましょう。</p>';
            }
            resultDiv.classList.remove('hidden');
        }
    </script>

<?php include 'includes/footer.php'; ?>
