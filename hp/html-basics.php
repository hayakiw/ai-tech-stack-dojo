<?php
$page_title = 'HTMLの基礎 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：Web制作の基礎知識';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">HTMLの基礎</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">HTMLはWebページの「骨組み」を作る言語です。難しそうに見えますが、基本はシンプル。AIの力を借りれば、すぐにWebページが作れるようになります。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">HTMLとは</h2>

            <p class="mb-4">HTML（HyperText Markup Language）は、Webページの構造を記述するための言語です。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">HTMLの役割</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 p-4 rounded text-center">
                        <div class="text-3xl mb-2">📄</div>
                        <h4 class="font-bold">構造を定義</h4>
                        <p class="text-sm text-gray-600">見出し、段落、リストなど</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded text-center">
                        <div class="text-3xl mb-2">🔗</div>
                        <h4 class="font-bold">リンクを作成</h4>
                        <p class="text-sm text-gray-600">他のページへ移動</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded text-center">
                        <div class="text-3xl mb-2">🖼️</div>
                        <h4 class="font-bold">メディアを配置</h4>
                        <p class="text-sm text-gray-600">画像や動画を表示</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">基本的なHTMLタグ</h2>

            <p class="mb-4">HTMLは「タグ」と呼ばれる記号で構造を表現します。</p>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">基本構造：</p>
                <pre class="text-sm overflow-x-auto"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;ページタイトル&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;見出し&lt;/h1&gt;
    &lt;p&gt;段落テキスト&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">よく使うタグ一覧</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex items-center border-b pb-2">
                        <code class="bg-gray-100 px-2 py-1 rounded mr-4 w-32">&lt;h1&gt;〜&lt;h6&gt;</code>
                        <span>見出し（h1が最大、h6が最小）</span>
                    </div>
                    <div class="flex items-center border-b pb-2">
                        <code class="bg-gray-100 px-2 py-1 rounded mr-4 w-32">&lt;p&gt;</code>
                        <span>段落</span>
                    </div>
                    <div class="flex items-center border-b pb-2">
                        <code class="bg-gray-100 px-2 py-1 rounded mr-4 w-32">&lt;a href=""&gt;</code>
                        <span>リンク</span>
                    </div>
                    <div class="flex items-center border-b pb-2">
                        <code class="bg-gray-100 px-2 py-1 rounded mr-4 w-32">&lt;img src=""&gt;</code>
                        <span>画像</span>
                    </div>
                    <div class="flex items-center border-b pb-2">
                        <code class="bg-gray-100 px-2 py-1 rounded mr-4 w-32">&lt;div&gt;</code>
                        <span>グループ化（汎用コンテナ）</span>
                    </div>
                    <div class="flex items-center">
                        <code class="bg-gray-100 px-2 py-1 rounded mr-4 w-32">&lt;ul&gt;&lt;li&gt;</code>
                        <span>リスト</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでHTMLを書く</h2>

            <p class="mb-4">AIを使えば、HTMLを覚えなくても欲しい構造を作れます。</p>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">プロンプト例：</p>
                <pre class="text-sm whitespace-pre-wrap">以下の内容でシンプルなHTMLページを作成してください。

・会社名：株式会社サンプル
・ロゴ画像：logo.png
・ナビゲーション：ホーム、サービス、会社概要、お問い合わせ
・メインビジュアル：「未来を創造する」というキャッチコピー
・3つのサービス紹介セクション
・フッター：著作権表示と住所

HTMLのみで、CSSは別ファイルで読み込む想定で書いてください。</pre>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>ポイント：</strong>AIに具体的な構成を伝えると、適切なHTMLタグを選んでくれます。セマンティック（意味のある）なHTMLを意識して指示しましょう。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>HTMLはWebページの構造を作る言語</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>タグで要素を囲んで構造を表現</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>見出し、段落、リンク、画像が基本</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AIに構成を伝えれば自動で生成できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                トップページ
            </a>
            <a href="css-basics.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：CSSの基礎
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
