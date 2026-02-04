<?php
$page_title = '用語集 - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：サポート';
$step_number = 16;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">用語集</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">マーケティングとAIで使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#marketing" class="bg-teal-100 text-teal-700 px-3 py-1 rounded hover:bg-teal-200">マーケティング基礎</a>
                <a href="#digital" class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded hover:bg-cyan-200">デジタルマーケティング</a>
                <a href="#metrics" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">指標・分析</a>
                <a href="#ai" class="bg-purple-100 text-purple-700 px-3 py-1 rounded hover:bg-purple-200">AI関連</a>
            </div>
        </div>

        <!-- マーケティング基礎 -->
        <section id="marketing" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">マーケティング基礎</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">4P（フォーピー）</h3>
                    <p class="text-sm text-gray-600 mt-1">Product（製品）、Price（価格）、Place（流通）、Promotion（販促）の頭文字。マーケティングミックスとも呼ばれる基本フレームワーク。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">ターゲット</h3>
                    <p class="text-sm text-gray-600 mt-1">商品・サービスを届けたい顧客層。年齢、性別、職業などの属性で定義する。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">ペルソナ</h3>
                    <p class="text-sm text-gray-600 mt-1">ターゲットを具体化した架空の顧客像。名前、年齢、職業、悩みなどを詳細に設定する。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">ファネル</h3>
                    <p class="text-sm text-gray-600 mt-1">認知→興味→検討→購入→リピートという顧客の購買プロセスを漏斗（じょうご）の形で表したもの。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">CTA（Call To Action）</h3>
                    <p class="text-sm text-gray-600 mt-1">「今すぐ購入」「無料で試す」など、ユーザーに行動を促すボタンやリンク。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">LP（ランディングページ）</h3>
                    <p class="text-sm text-gray-600 mt-1">広告などから誘導される、購入や登録を目的とした1枚の縦長ページ。</p>
                </div>
            </div>
        </section>

        <!-- デジタルマーケティング -->
        <section id="digital" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">デジタルマーケティング</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">SEO（Search Engine Optimization）</h3>
                    <p class="text-sm text-gray-600 mt-1">検索エンジン最適化。Googleなどの検索結果で上位表示されるようにWebサイトを最適化すること。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">SEM（Search Engine Marketing）</h3>
                    <p class="text-sm text-gray-600 mt-1">検索エンジンマーケティング。SEOとリスティング広告を合わせた検索エンジン経由のマーケティング全般。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">リスティング広告</h3>
                    <p class="text-sm text-gray-600 mt-1">検索結果に表示されるテキスト広告。Google広告、Yahoo広告など。クリック課金型。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">コンテンツマーケティング</h3>
                    <p class="text-sm text-gray-600 mt-1">価値あるコンテンツ（記事、動画など）を提供して見込み客を集め、育成するマーケティング手法。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">メールマーケティング</h3>
                    <p class="text-sm text-gray-600 mt-1">メールを使って見込み客との関係を構築し、購入を促すマーケティング手法。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">オウンドメディア</h3>
                    <p class="text-sm text-gray-600 mt-1">自社が所有・運営するメディア（ブログ、Webサイトなど）。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">リターゲティング</h3>
                    <p class="text-sm text-gray-600 mt-1">一度サイトを訪問したユーザーに対して、再度広告を表示する手法。</p>
                </div>
            </div>
        </section>

        <!-- 指標・分析 -->
        <section id="metrics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">指標・分析</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">PV（Page View）</h3>
                    <p class="text-sm text-gray-600 mt-1">ページビュー。Webページが閲覧された回数。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">UU（Unique User）</h3>
                    <p class="text-sm text-gray-600 mt-1">ユニークユーザー。サイトを訪問した人数（重複なし）。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">CV（Conversion）</h3>
                    <p class="text-sm text-gray-600 mt-1">コンバージョン。購入、登録、問い合わせなど、サイトの目標達成のこと。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">CVR（Conversion Rate）</h3>
                    <p class="text-sm text-gray-600 mt-1">コンバージョン率。訪問者のうち、目標を達成した人の割合。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">CTR（Click Through Rate）</h3>
                    <p class="text-sm text-gray-600 mt-1">クリック率。広告やリンクが表示された回数に対するクリック数の割合。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">CPA（Cost Per Acquisition）</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客獲得単価。1件のコンバージョンを獲得するのにかかった広告費用。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">LTV（Life Time Value）</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客生涯価値。1人の顧客が生涯にわたってもたらす利益の総額。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">ROAS（Return On Ad Spend）</h3>
                    <p class="text-sm text-gray-600 mt-1">広告費用対効果。広告費に対する売上の割合。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">直帰率</h3>
                    <p class="text-sm text-gray-600 mt-1">サイトに訪問して、最初のページだけ見て離脱した割合。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">エンゲージメント率</h3>
                    <p class="text-sm text-gray-600 mt-1">SNSでいいね、コメント、シェアなどの反応があった割合。</p>
                </div>
            </div>
        </section>

        <!-- AI関連 -->
        <section id="ai" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AI関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">生成AI（Generative AI）</h3>
                    <p class="text-sm text-gray-600 mt-1">テキスト、画像、動画などの新しいコンテンツを生成できるAI。ChatGPT、Claude、Midjourneyなど。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">LLM（Large Language Model）</h3>
                    <p class="text-sm text-gray-600 mt-1">大規模言語モデル。大量のテキストデータで学習した、自然言語を理解・生成するAI。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">プロンプト</h3>
                    <p class="text-sm text-gray-600 mt-1">AIに対する指示文。プロンプトの質がAIの出力品質を左右する。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">プロンプトエンジニアリング</h3>
                    <p class="text-sm text-gray-600 mt-1">AIから望む出力を得るために、効果的なプロンプトを設計する技術。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">ハルシネーション</h3>
                    <p class="text-sm text-gray-600 mt-1">AIが事実と異なる情報を、あたかも正しいかのように出力する現象。「幻覚」とも。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">トークン</h3>
                    <p class="text-sm text-gray-600 mt-1">AIが処理するテキストの単位。日本語の場合、1文字が1〜2トークン程度。</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">API（Application Programming Interface）</h3>
                    <p class="text-sm text-gray-600 mt-1">ソフトウェア同士が連携するための仕組み。AIを自分のシステムに組み込む際に使用。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-teal-500 to-cyan-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×マーケティング入門コースを完了しました。<br>学んだことを実践して、マーケティングを成功させましょう！</p>
                <a href="index.php" class="inline-block bg-white text-teal-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
