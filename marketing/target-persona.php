<?php
$page_title = 'ターゲットとペルソナ - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：マーケティングの基礎知識';
$step_number = 3;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ターゲットとペルソナ</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">「誰に届けるか」を明確にすることがマーケティングの第一歩。ターゲットとペルソナの設定方法を学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">ターゲットとペルソナの違い</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">ターゲット</h3>
                    <p class="text-gray-600 mb-4">商品・サービスを届けたい顧客層の「属性」</p>
                    <div class="bg-gray-50 p-4 rounded">
                        <p class="text-sm font-bold mb-2">例：</p>
                        <ul class="text-sm space-y-1">
                            <li>・30代〜40代の女性</li>
                            <li>・都市部在住</li>
                            <li>・共働き世帯</li>
                            <li>・年収500万円以上</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-cyan-600">ペルソナ</h3>
                    <p class="text-gray-600 mb-4">ターゲットを具体化した「架空の1人の顧客像」</p>
                    <div class="bg-cyan-50 p-4 rounded">
                        <p class="text-sm font-bold mb-2">例：</p>
                        <ul class="text-sm space-y-1">
                            <li>・佐藤美咲さん（35歳）</li>
                            <li>・IT企業の企画職</li>
                            <li>・夫と子供1人の3人暮らし</li>
                            <li>・時短と効率化に関心が高い</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>ポイント：</strong>ターゲットは「グループ」、ペルソナは「具体的な1人」。ペルソナを設定することで、より刺さるメッセージを作れます。</p>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">ペルソナの作り方</h2>

            <p class="mb-4">ペルソナは以下の項目を具体的に設定します。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">ペルソナ設定シート</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="space-y-3">
                        <div class="bg-gray-50 p-3 rounded">
                            <span class="font-bold text-teal-600">基本情報</span>
                            <p class="text-sm text-gray-600">名前、年齢、性別、居住地、職業、年収</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded">
                            <span class="font-bold text-teal-600">ライフスタイル</span>
                            <p class="text-sm text-gray-600">家族構成、趣味、休日の過ごし方</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded">
                            <span class="font-bold text-teal-600">情報収集</span>
                            <p class="text-sm text-gray-600">よく見るSNS、読む雑誌、信頼する情報源</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="bg-gray-50 p-3 rounded">
                            <span class="font-bold text-teal-600">悩み・課題</span>
                            <p class="text-sm text-gray-600">困っていること、解決したい問題</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded">
                            <span class="font-bold text-teal-600">願望・目標</span>
                            <p class="text-sm text-gray-600">なりたい姿、達成したいこと</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded">
                            <span class="font-bold text-teal-600">購買行動</span>
                            <p class="text-sm text-gray-600">購入の決め手、価格感度、決済方法</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでペルソナを作成する</h2>

            <p class="mb-4">AIを使えば、ペルソナ作成を効率化できます。</p>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-teal-400 mb-2 font-bold">プロンプト例：</p>
                <pre class="text-sm whitespace-pre-wrap">以下の商品のターゲットとなるペルソナを作成してください。

【商品】オンライン英会話サービス（月額9,800円）
【ターゲット層】20代〜30代のビジネスパーソン

ペルソナには以下を含めてください：
- 基本情報（名前、年齢、職業、年収）
- ライフスタイル
- 英語学習の悩み
- サービスに求めること
- 情報収集の方法</pre>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <p class="text-teal-600 mb-2 font-bold">AIの回答例：</p>
                <div class="bg-gray-50 p-4 rounded">
                    <h4 class="font-bold mb-2">ペルソナ：田中健太さん（28歳）</h4>
                    <ul class="text-sm space-y-2">
                        <li><strong>職業：</strong>IT企業のプロジェクトマネージャー、年収550万円</li>
                        <li><strong>ライフスタイル：</strong>平日は忙しく、休日にまとめて勉強。通勤時間は1時間</li>
                        <li><strong>悩み：</strong>海外チームとの会議で言いたいことが伝わらない。スクールは時間が合わない</li>
                        <li><strong>求めること：</strong>隙間時間で学べる、ビジネス英語に特化、予約の柔軟性</li>
                        <li><strong>情報収集：</strong>X（Twitter）、YouTube、ビジネス系ニュースアプリ</li>
                    </ul>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>AIの活用ポイント：</strong>複数のペルソナパターンを出してもらい、最も響くものを選ぶと効果的です。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>ターゲットは顧客層、ペルソナは具体的な1人の顧客像</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>ペルソナを設定すると訴求メッセージが明確になる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>基本情報、悩み、願望、購買行動を具体的に設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIを使えばペルソナ作成が効率化できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="digital-marketing.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：デジタルマーケティング入門
            </a>
            <a href="marketing-funnel.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：マーケティングファネル
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
