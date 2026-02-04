<?php
$page_title = '価格設定・見積もり - AI×副業・フリーランス | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">価格設定・見積もり</h1>

        <!-- イントロ -->
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">「いくらで請求すればいいかわからない」は副業初心者の共通の悩み。適正価格の決め方と見積もりのコツを学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">価格設定の考え方</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">時給換算で考える</h3>
                    <p class="text-sm text-gray-600 mb-3">まずは自分の時給を設定。初心者なら1,500〜2,000円、経験者なら3,000〜5,000円が目安。</p>
                    <div class="bg-rose-50 p-4 rounded">
                        <p class="text-sm"><span class="font-bold">計算例：</span>作業時間5時間 × 時給2,000円 = 10,000円</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">市場相場を調査</h3>
                    <p class="text-sm text-gray-600">クラウドソーシングで同じような案件の相場をチェック。極端に安くも高くもしない。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">価値で価格を決める</h3>
                    <p class="text-sm text-gray-600">作業時間だけでなく、クライアントにもたらす価値を考慮。売上に直結する仕事は高く設定可能。</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">分野別の相場感</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2 text-rose-600">分野</th>
                            <th class="text-left py-2 text-rose-600">初心者</th>
                            <th class="text-left py-2 text-rose-600">経験者</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 font-bold">Webライティング</td>
                            <td class="py-3">1円/文字</td>
                            <td class="py-3">3-5円/文字</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">バナーデザイン</td>
                            <td class="py-3">3,000-5,000円/枚</td>
                            <td class="py-3">10,000-30,000円/枚</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">LP制作</td>
                            <td class="py-3">30,000-50,000円</td>
                            <td class="py-3">100,000-300,000円</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">動画編集</td>
                            <td class="py-3">3,000-5,000円/本</td>
                            <td class="py-3">10,000-50,000円/本</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-bold">SNS運用代行</td>
                            <td class="py-3">30,000円/月</td>
                            <td class="py-3">100,000-300,000円/月</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">AIで見積もり作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の案件の見積もりを作成してください。

【案件内容】
{案件の説明}

【作業内容】
・{作業1}
・{作業2}
・{作業3}

【私の時給目安】
{X}円

【含めてほしい項目】
・作業項目ごとの工数と金額
・小計と消費税
・納期
・備考（修正回数など）

見積書として使えるフォーマットでお願いします。</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">価格交渉のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">安易に値下げしない</h4>
                    <p class="text-sm text-gray-600">一度下げると戻すのが難しい。代わりに作業内容を調整する提案を。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">根拠を説明する</h4>
                    <p class="text-sm text-gray-600">「〇時間かかるので」と具体的に説明すると納得されやすい。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">継続案件は値引きOK</h4>
                    <p class="text-sm text-gray-600">長期契約が見込める場合は、多少の値引きで関係構築を優先。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">断る勇気も大切</h4>
                    <p class="text-sm text-gray-600">極端な値引き要求は断る。安売りは自分の価値を下げる。</p>
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
                        <span>時給換算と市場相場で適正価格を設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>クライアントへの価値も考慮</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>AIで見積書を効率的に作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>安易な値下げは避け、根拠を持って交渉</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="client-acquisition.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：案件獲得の方法
            </a>
            <a href="client-communication.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                次へ：クライアントコミュニケーション
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
