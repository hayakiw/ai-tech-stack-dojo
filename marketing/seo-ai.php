<?php
$page_title = 'SEO×AI - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 11;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">SEO×AI</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">検索エンジンで上位表示されれば、継続的に見込み客を集められます。AIを活用して効率的にSEO対策を進めましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">SEOの基本</h2>

            <p class="mb-4">SEO（Search Engine Optimization）は、Googleなどの検索結果で上位表示されるようにWebサイトを最適化すること。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">SEOの3つの柱</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-teal-50 p-4 rounded">
                        <h4 class="font-bold text-teal-600 mb-2">コンテンツ</h4>
                        <p class="text-sm text-gray-600">ユーザーにとって価値ある情報を提供</p>
                    </div>
                    <div class="bg-teal-50 p-4 rounded">
                        <h4 class="font-bold text-teal-600 mb-2">テクニカル</h4>
                        <p class="text-sm text-gray-600">サイト構造、表示速度、モバイル対応</p>
                    </div>
                    <div class="bg-teal-50 p-4 rounded">
                        <h4 class="font-bold text-teal-600 mb-2">被リンク</h4>
                        <p class="text-sm text-gray-600">他サイトからの信頼（リンク）を獲得</p>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>ポイント：</strong>AIはコンテンツSEOで特に活躍します。キーワード調査、記事構成、ライティングを効率化できます。</p>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでキーワード調査</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">関連キーワードを洗い出す</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">「オンライン英会話」に関連するキーワードを調査してください。

以下の観点で分類して提案してください：
1. 情報収集キーワード（「とは」「やり方」など）
2. 比較検討キーワード（「おすすめ」「比較」など）
3. 購入意向キーワード（「無料体験」「料金」など）
4. 悩み系キーワード（「続かない」「効果ない」など）

各キーワードについて、検索意図と想定される競合の強さ（強/中/弱）も教えてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-teal-600">ロングテールキーワードを見つける</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">「オンライン英会話」のロングテールキーワードを30個提案してください。

条件：
・3語以上の複合キーワード
・検索ボリュームは少なくても、購入意向が高いもの
・競合が少なそうなニッチなもの

例：「オンライン英会話 初心者 おすすめ 安い」</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでSEO記事を作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Step 1: 記事構成を作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">「オンライン英会話 初心者 選び方」というキーワードで
上位表示を狙う記事の構成案を作成してください。

条件：
・想定文字数：3,000〜4,000字
・ターゲット：英語学習を始めたい社会人
・競合と差別化できる独自の切り口を含める
・H2、H3見出しを階層化して提案

各見出しには、含めるべき内容と想定文字数も記載してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Step 2: 本文を執筆</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の構成で記事を執筆してください。

【狙うキーワード】オンライン英会話 初心者 選び方
【構成】（上で作成した構成を貼り付け）

執筆ルール：
・専門用語は初心者にもわかるように説明
・具体的な数字や例を入れる
・「です・ます」調で親しみやすく
・各見出しの最後に要点をまとめる
・CTAとして無料体験への誘導を自然に含める</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Step 3: タイトルとメタディスクリプション</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の記事のSEOタイトルとメタディスクリプションを作成してください。

【狙うキーワード】オンライン英会話 初心者 選び方
【記事内容の要約】（記事の概要を記入）

条件：
・タイトル：32文字以内、キーワードを前方に配置
・メタディスクリプション：120文字程度、クリックしたくなる内容

それぞれ3パターンずつ提案してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIとSEOの注意点</h2>

            <div class="space-y-4">
                <div class="bg-red-50 p-4 rounded-lg flex items-start">
                    <span class="text-red-500 text-xl mr-3">🚫</span>
                    <div>
                        <h4 class="font-bold mb-1">AIの出力をそのまま使わない</h4>
                        <p class="text-sm text-gray-600">Googleは「AIが書いた低品質な記事」をペナルティの対象にする可能性があります。必ず人間が編集・加筆しましょう。</p>
                    </div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg flex items-start">
                    <span class="text-red-500 text-xl mr-3">🚫</span>
                    <div>
                        <h4 class="font-bold mb-1">独自性・専門性を追加</h4>
                        <p class="text-sm text-gray-600">自社の事例、独自の調査、専門家の見解など、AIだけでは出せない価値を加えましょう。</p>
                    </div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg flex items-start">
                    <span class="text-red-500 text-xl mr-3">🚫</span>
                    <div>
                        <h4 class="font-bold mb-1">事実確認は必須</h4>
                        <p class="text-sm text-gray-600">AIは間違った情報を書くことがあります。特に数字や固有名詞は必ず確認してください。</p>
                    </div>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 mt-6">
                <p><strong>Googleの方針：</strong>AIを使ったかどうかではなく「ユーザーに価値があるか」が重要。AIは下書きツールとして使い、最終的には人間が品質を担保しましょう。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIでキーワード調査、記事構成、下書きを効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>構成→本文→タイトルの順で段階的に作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIの出力はそのまま使わず、必ず人間が編集</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>独自性と事実確認を忘れずに</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="copywriting.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：コピーライティング×AI
            </a>
            <a href="email-marketing.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：メール×AI
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
