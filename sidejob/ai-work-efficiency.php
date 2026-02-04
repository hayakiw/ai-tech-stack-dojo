<?php
$page_title = 'AI活用で作業効率化 - AI×副業・フリーランス | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：AI×副業スキル';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI活用で作業効率化</h1>

        <!-- イントロ -->
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">限られた副業時間を最大限活用するために、AIで作業を効率化。同じ時間で2倍、3倍の成果を出す方法を学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">ライティングの効率化</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">構成案の自動生成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">「副業で月5万円稼ぐ方法」というテーマで
3000文字のSEO記事の構成案を作成してください。

【条件】
・初心者向け
・H2見出し5つ程度
・各見出しの概要も記載

読者が最後まで読みたくなる構成でお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">下書きの作成→編集</h3>
                    <p class="text-sm text-gray-600 mb-3">AIに下書きを作ってもらい、自分で編集・加筆するスタイルが効率的。</p>
                    <div class="flex items-center text-sm">
                        <span class="bg-gray-200 px-3 py-1 rounded">AI下書き 30分</span>
                        <span class="mx-2">→</span>
                        <span class="bg-rose-100 px-3 py-1 rounded">人が編集 60分</span>
                        <span class="mx-2">=</span>
                        <span class="bg-green-100 px-3 py-1 rounded font-bold">90分で完成</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">デザインの効率化</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">AI画像生成</h4>
                    <p class="text-sm text-gray-600">DALL-E、Midjourney、Canva AIでオリジナル画像を生成</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">デザイン提案</h4>
                    <p class="text-sm text-gray-600">AIに配色やレイアウトのアイデアを提案してもらう</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">コピー文作成</h4>
                    <p class="text-sm text-gray-600">バナーやLPのキャッチコピーをAIで生成</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">背景除去・加工</h4>
                    <p class="text-sm text-gray-600">AI搭載ツールで画像加工を自動化</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">コミュニケーションの効率化</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">メール返信の下書き</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のクライアントからのメールに対する返信を作成してください。

【受信メール】
{メール内容}

【返信のポイント】
・丁寧で感じの良いトーン
・質問への明確な回答
・次のアクションを提示

プロフェッショナルな印象を与える文面でお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">提案書・資料作成</h3>
                    <p class="text-sm text-gray-600">AIに提案書のドラフトを作成してもらい、自分でカスタマイズ。</p>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">効率化のベストプラクティス</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-rose-500 text-white px-3 py-1 rounded-full font-bold mr-4">1</span>
                        <div>
                            <h4 class="font-bold">プロンプトをテンプレート化</h4>
                            <p class="text-sm text-gray-600 mt-1">よく使うプロンプトは保存して再利用。毎回考える手間を省く。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-rose-500 text-white px-3 py-1 rounded-full font-bold mr-4">2</span>
                        <div>
                            <h4 class="font-bold">AIの出力は必ずチェック</h4>
                            <p class="text-sm text-gray-600 mt-1">誤情報や不自然な表現がないか確認。品質管理は人間の仕事。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-rose-500 text-white px-3 py-1 rounded-full font-bold mr-4">3</span>
                        <div>
                            <h4 class="font-bold">自分らしさを加える</h4>
                            <p class="text-sm text-gray-600 mt-1">AI任せにせず、自分の経験や視点を加えて差別化。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">まとめ</h2>
            <div class="bg-rose-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>構成案・下書きはAIに任せて編集に集中</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>デザインもAI画像生成・提案で効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>メール・資料作成もAIでスピードアップ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>品質チェックと自分らしさの追加は必須</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-skills.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIで身につけるスキル
            </a>
            <a href="ai-portfolio.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                次へ：AIでポートフォリオ作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
