<?php
$page_title = '法律・税金の基礎 - AI×副業・フリーランス | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：副業・フリーランスの基礎知識';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">法律・税金の基礎</h1>

        <!-- イントロ -->
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">副業を始める前に知っておくべき法律と税金の基礎。会社の規定確認から確定申告まで、押さえておきたいポイントを解説します。</p>
        </div>

        <!-- 注意書き -->
        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-8">
            <p class="text-sm text-yellow-800">※この内容は一般的な情報提供であり、個別の状況に応じた専門家（税理士・弁護士）への相談をお勧めします。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">会社員が副業を始める前に</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">1. 就業規則の確認</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• 副業禁止の会社も多い（特に大企業）</li>
                        <li>• 許可制の場合は事前申請が必要</li>
                        <li>• 競業避止義務（同業他社での副業禁止）に注意</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600 mb-3">2. 副業がバレるパターン</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• 住民税の増加（特別徴収の場合）</li>
                        <li>• SNSでの発信</li>
                        <li>• 同僚への口外</li>
                    </ul>
                    <div class="mt-3 bg-rose-50 p-3 rounded text-sm">
                        <span class="font-bold">対策：</span>住民税を「普通徴収」にすれば会社に通知されない
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">確定申告について</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-rose-600">確定申告が必要なケース</h3>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-rose-50 rounded">
                        <span class="font-bold text-rose-600 mr-3">20万円</span>
                        <span class="text-sm">副業所得が年間20万円を超えたら確定申告が必要</span>
                    </div>
                    <p class="text-sm text-gray-600">※住民税の申告は20万円以下でも必要な場合があります</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">白色申告</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 手続きが簡単</li>
                        <li>• 特別控除なし</li>
                        <li>• 帳簿は簡易でOK</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">青色申告</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 最大65万円の特別控除</li>
                        <li>• 開業届が必要</li>
                        <li>• 複式簿記が必要</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">経費にできるもの</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <h4 class="font-bold text-rose-600 mb-2">経費にできる</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>✓ PC・周辺機器</li>
                            <li>✓ ソフトウェア・サブスク</li>
                            <li>✓ 通信費（按分）</li>
                            <li>✓ 書籍・教材</li>
                            <li>✓ 作業スペース家賃（按分）</li>
                            <li>✓ 取材・打ち合わせ交通費</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-600 mb-2">経費にできない</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>✗ 私用の飲食代</li>
                            <li>✗ 私用の衣服</li>
                            <li>✗ 仕事と関係ない支出</li>
                        </ul>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-500">※按分＝仕事用と私用の割合で按分計算</p>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">開業届について</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div>
                        <h4 class="font-bold text-rose-600 mb-2">開業届を出すメリット</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 青色申告ができる（最大65万円控除）</li>
                            <li>• 屋号で口座開設できる</li>
                            <li>• 社会的信用度が上がる</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-rose-600 mb-2">提出方法</h4>
                        <p class="text-sm text-gray-600">税務署に「個人事業の開業届出書」を提出（e-Taxでも可）。開業から1ヶ月以内が目安。</p>
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
                        <span>まず会社の就業規則を確認</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>年間20万円超で確定申告が必要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>PC・通信費・書籍などは経費にできる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>開業届を出すと青色申告で節税可能</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="sidejob-types.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：副業の種類と選び方
            </a>
            <a href="time-management.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                次へ：時間管理・両立のコツ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
