<?php
$page_title = '用語集 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：公開とサポート';
$step_number = 14;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">用語集</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Web制作とAIで使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#html-css" class="bg-orange-100 text-orange-700 px-3 py-1 rounded hover:bg-orange-200">HTML/CSS</a>
                <a href="#design" class="bg-amber-100 text-amber-700 px-3 py-1 rounded hover:bg-amber-200">デザイン</a>
                <a href="#web" class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded hover:bg-yellow-200">Web全般</a>
                <a href="#ai" class="bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200">AI関連</a>
            </div>
        </div>

        <!-- HTML/CSS -->
        <section id="html-css" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">HTML/CSS</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">HTML（HyperText Markup Language）</h3>
                    <p class="text-sm text-gray-600 mt-1">Webページの構造を記述するための言語。見出し、段落、リンクなどを定義する。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">CSS（Cascading Style Sheets）</h3>
                    <p class="text-sm text-gray-600 mt-1">Webページの見た目（色、フォント、レイアウト等）を定義するための言語。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">タグ</h3>
                    <p class="text-sm text-gray-600 mt-1">HTMLの要素を囲む記号。&lt;p&gt;、&lt;div&gt;、&lt;h1&gt;など。開始タグと終了タグがある。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">クラス（class）</h3>
                    <p class="text-sm text-gray-600 mt-1">HTML要素に付ける名前。CSSでスタイルを適用するために使う。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">Tailwind CSS</h3>
                    <p class="text-sm text-gray-600 mt-1">ユーティリティファーストのCSSフレームワーク。クラス名でスタイルを適用できる。</p>
                </div>
            </div>
        </section>

        <!-- デザイン -->
        <section id="design" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">デザイン</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-amber-600">レスポンシブデザイン</h3>
                    <p class="text-sm text-gray-600 mt-1">PC、タブレット、スマホなど、画面サイズに応じてレイアウトが変化するデザイン手法。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-amber-600">UI（User Interface）</h3>
                    <p class="text-sm text-gray-600 mt-1">ユーザーがサービスと接する部分。ボタン、メニュー、フォームなどの見た目や操作方法。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-amber-600">UX（User Experience）</h3>
                    <p class="text-sm text-gray-600 mt-1">ユーザー体験。サービスを利用する際の満足度や使いやすさ全体を指す。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-amber-600">ワイヤーフレーム</h3>
                    <p class="text-sm text-gray-600 mt-1">Webページの骨組みを示す設計図。色やデザイン前の段階で構成を決める。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-amber-600">ファーストビュー</h3>
                    <p class="text-sm text-gray-600 mt-1">ページを開いた時に最初に表示される領域。スクロールせずに見える部分。</p>
                </div>
            </div>
        </section>

        <!-- Web全般 -->
        <section id="web" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-yellow-200">Web全般</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">ドメイン</h3>
                    <p class="text-sm text-gray-600 mt-1">Webサイトのアドレス（URL）。example.comのような形式。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">サーバー</h3>
                    <p class="text-sm text-gray-600 mt-1">Webサイトのデータを保管し、ユーザーに配信するコンピュータ。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">ホスティング</h3>
                    <p class="text-sm text-gray-600 mt-1">Webサイトを公開するためのサーバー提供サービス。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">SSL/HTTPS</h3>
                    <p class="text-sm text-gray-600 mt-1">通信を暗号化する技術。URLがhttps://で始まるサイトは安全。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">LP（ランディングページ）</h3>
                    <p class="text-sm text-gray-600 mt-1">特定の目的（購入、登録など）に特化した1ページのWebサイト。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">CTA（Call To Action）</h3>
                    <p class="text-sm text-gray-600 mt-1">ユーザーに行動を促すボタンやリンク。「今すぐ申し込む」など。</p>
                </div>
            </div>
        </section>

        <!-- AI関連 -->
        <section id="ai" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">AI関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">生成AI（Generative AI）</h3>
                    <p class="text-sm text-gray-600 mt-1">テキスト、画像、動画などを自動生成できるAI。ChatGPT、Midjourneyなど。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">プロンプト</h3>
                    <p class="text-sm text-gray-600 mt-1">AIへの指示文。的確なプロンプトが良い出力を生む。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">LLM（Large Language Model）</h3>
                    <p class="text-sm text-gray-600 mt-1">大規模言語モデル。ChatGPTやClaudeの基盤技術。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">ハルシネーション</h3>
                    <p class="text-sm text-gray-600 mt-1">AIが事実と異なる情報を生成してしまう現象。要確認。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-orange-500 to-amber-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×ホームページ制作コースを完了しました。<br>学んだことを活かして、素敵なWebサイトを作りましょう！</p>
                <a href="index.php" class="inline-block bg-white text-orange-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
