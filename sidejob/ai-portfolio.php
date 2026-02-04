<?php
$page_title = 'AIでポートフォリオ作成 - AI×副業・フリーランス | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：AI×副業スキル';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでポートフォリオ作成</h1>

        <!-- イントロ -->
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">案件獲得にはポートフォリオが必須。実績がなくても、AIを活用すれば魅力的なポートフォリオを作成できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">ポートフォリオに必要な要素</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">👤 自己紹介</h4>
                    <p class="text-sm text-gray-600">経歴、強み、人柄が伝わるプロフィール</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">💼 実績・作品</h4>
                    <p class="text-sm text-gray-600">過去の制作物、成果物のサンプル</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">🎯 スキル</h4>
                    <p class="text-sm text-gray-600">できること、得意分野、使用ツール</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">📞 連絡先</h4>
                    <p class="text-sm text-gray-600">仕事の依頼方法、SNSリンク</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">AIで自己PRを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">副業ポートフォリオ用の自己PR文を作成してください。

【基本情報】
・現職：{職業}
・副業の分野：{Webライティング/デザイン等}
・経験：{未経験/〇年}

【強み・特徴】
・{強み1}
・{強み2}
・{仕事への姿勢}

【ターゲット】
{どんなクライアントに依頼されたいか}

クライアントが「この人に頼みたい」と思える、
信頼感と親しみやすさを両立した文章でお願いします。
200-300文字程度で。</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">実績がない場合の対策</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">1. サンプル作品を作る</h3>
                    <p class="text-sm text-gray-600 mb-3">架空のクライアントを想定して作品を制作。AIと一緒に品質を高める。</p>
                    <div class="bg-rose-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>「カフェのWebサイトをデザインしたい」→AIにペルソナや要件を作ってもらい、実際に制作
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">2. 低単価案件で実績を作る</h3>
                    <p class="text-sm text-gray-600">最初は報酬より実績重視。1件でも完了実績があると信頼度UP。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">3. 知人・友人の仕事を手伝う</h3>
                    <p class="text-sm text-gray-600">身近な人の仕事を手伝って実績に。許可を得てポートフォリオに掲載。</p>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">ポートフォリオの作成方法</h2>

            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-rose-600 mb-2">Notion</h4>
                    <p class="text-sm text-gray-600">無料で簡単。テンプレート豊富。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-rose-600 mb-2">Canva</h4>
                    <p class="text-sm text-gray-600">おしゃれなデザインが簡単に。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-rose-600 mb-2">ペライチ</h4>
                    <p class="text-sm text-gray-600">Webサイト形式で本格的に。</p>
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
                        <span>自己紹介、実績、スキル、連絡先を含める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>AIで魅力的な自己PR文を作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>実績がなければサンプル作品を制作</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>Notion、Canva、ペライチで簡単作成</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-work-efficiency.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI活用で作業効率化
            </a>
            <a href="client-acquisition.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                次へ：案件獲得の方法
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
