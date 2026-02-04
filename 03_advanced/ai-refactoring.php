<?php
$page_title = '既存コードのリファクタリング - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'architecture';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }\n        .prompt-box {\n            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);\n            border-left: 4px solid #f59e0b;\n        }';
$section_name = '第2部：AIとアーキテクチャ設計';
$step_number = 7;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">既存コードのリファクタリング</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">既存コードの改善はAIの得意分野です。コードの分析、問題点の特定、改善案の提示、そして実装まで、AIと協力して効率的にリファクタリングを進めましょう。</p>
        </div>

        <!-- リファクタリングの流れ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIを使ったリファクタリングの流れ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">1</div>
                    <div>
                        <h4 class="font-bold">コードを分析させる</h4>
                        <p class="text-sm text-gray-600">AIにコードを読ませ、問題点を洗い出す</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">2</div>
                    <div>
                        <h4 class="font-bold">改善案を提案させる</h4>
                        <p class="text-sm text-gray-600">複数のアプローチを比較検討</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">3</div>
                    <div>
                        <h4 class="font-bold">テストを先に書く</h4>
                        <p class="text-sm text-gray-600">リファクタリング前に動作を保証するテストを作成</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">4</div>
                    <div>
                        <h4 class="font-bold">段階的にリファクタリング</h4>
                        <p class="text-sm text-gray-600">小さな変更を積み重ね、都度テスト</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">5</div>
                    <div>
                        <h4 class="font-bold">レビューと確認</h4>
                        <p class="text-sm text-gray-600">AIに再度レビューさせ、改善を確認</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 1: コード分析 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 1: コードを分析させる</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">分析を依頼するプロンプト</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のコードをレビューして、問題点と改善案を教えてください。

【観点】
1. 可読性（変数名、関数の長さ、コメント）
2. 保守性（責任の分離、重複コード）
3. パフォーマンス（N+1問題、不要な処理）
4. セキュリティ（入力検証、機密情報の扱い）
5. テスト容易性（依存関係、モック可能性）

【コード】
```python
# ここに分析したいコードを貼り付け
```</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">分析結果の例</h3>
                <div class="space-y-3 text-sm">
                    <div class="p-3 bg-red-50 rounded">
                        <span class="font-bold text-red-600">問題1: 関数が長すぎる</span>
                        <p>process_order() が200行を超えています。責任を分割すべきです。</p>
                    </div>
                    <div class="p-3 bg-red-50 rounded">
                        <span class="font-bold text-red-600">問題2: N+1クエリ</span>
                        <p>ループ内でDBクエリを実行しています。joinで一括取得すべきです。</p>
                    </div>
                    <div class="p-3 bg-yellow-50 rounded">
                        <span class="font-bold text-yellow-600">問題3: マジックナンバー</span>
                        <p>`if status == 3` のような意味不明な数値。定数化が必要です。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 2: 改善案の提示 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 2: 改善案を提案させる</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">改善案を依頼するプロンプト</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>指摘された問題について、具体的な改善案を示してください。

【問題1: 関数が長すぎる】
process_order() をどのように分割すべきですか？
各関数の責任と、呼び出し関係を示してください。

【問題2: N+1クエリ】
現在のコードと、改善後のコードを両方示してください。
パフォーマンスの違いも説明してください。</pre>
                </div>
            </div>
        </section>

        <!-- Step 3: テストを先に書く -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 3: テストを先に書く</h2>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                <p><strong>重要：</strong>リファクタリング前に、現在の動作を保証するテストを書きましょう。これにより、リファクタリング後も同じ動作をすることを確認できます。</p>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">テスト作成を依頼</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>リファクタリング前に、現在の process_order() の動作を保証するテストを書いてください。

【テストすべきケース】
1. 正常系：通常の注文処理
2. 在庫不足の場合
3. 決済失敗の場合
4. 境界値：数量が0や負の場合

現在の実装を「正」として、テストを作成してください。</pre>
                </div>
            </div>
        </section>

        <!-- Step 4: 段階的リファクタリング -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 4: 段階的にリファクタリング</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">リファクタリングの鉄則</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-3 bg-green-50 rounded">
                        <span class="font-bold text-green-600">○ やるべきこと</span>
                        <ul class="text-sm mt-1 space-y-1">
                            <li>・小さな変更を1つずつ</li>
                            <li>・変更ごとにテスト実行</li>
                            <li>・変更ごとにコミット</li>
                            <li>・動作を変えずに構造だけ変える</li>
                        </ul>
                    </div>
                    <div class="p-3 bg-red-50 rounded">
                        <span class="font-bold text-red-600">✗ 避けるべきこと</span>
                        <ul class="text-sm mt-1 space-y-1">
                            <li>・一度に大量の変更</li>
                            <li>・機能追加とリファクタリングの同時実行</li>
                            <li>・テストなしでの変更</li>
                            <li>・「ついでに」の修正</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">段階的なリファクタリング指示例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>process_order() のリファクタリングを段階的に行います。
まず最初のステップとして、バリデーション部分だけを
validate_order() として抽出してください。

【制約】
- 動作は変えない
- 他の部分は触らない
- このステップだけでテストが通ることを確認

完了したら次のステップに進みます。</pre>
                </div>
            </div>

            <div class="space-y-3">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-sm text-gray-500">Step 4-1</span>
                    <p class="font-bold">バリデーション部分を抽出 → テスト → コミット</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-sm text-gray-500">Step 4-2</span>
                    <p class="font-bold">在庫チェック部分を抽出 → テスト → コミット</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-sm text-gray-500">Step 4-3</span>
                    <p class="font-bold">決済処理部分を抽出 → テスト → コミット</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-sm text-gray-500">Step 4-4</span>
                    <p class="font-bold">N+1問題を解決 → テスト → コミット</p>
                </div>
            </div>
        </section>

        <!-- よくあるリファクタリングパターン -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIに依頼しやすいリファクタリングパターン</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600 mb-2">関数の抽出</h3>
                    <p class="text-sm text-gray-600">「この部分を独立した関数に抽出して」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600 mb-2">変数名の改善</h3>
                    <p class="text-sm text-gray-600">「より意味のある変数名に変更して」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600 mb-2">重複コードの除去</h3>
                    <p class="text-sm text-gray-600">「重複している部分を共通化して」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600 mb-2">条件分岐の簡素化</h3>
                    <p class="text-sm text-gray-600">「ネストを減らして可読性を上げて」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600 mb-2">マジックナンバーの定数化</h3>
                    <p class="text-sm text-gray-600">「数値リテラルを意味のある定数に」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600 mb-2">型の追加</h3>
                    <p class="text-sm text-gray-600">「型アノテーションを追加して」</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>まず分析</strong> - AIに問題点を洗い出させる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>テストを先に</strong> - 動作を保証してからリファクタリング</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>小さく進める</strong> - 1つの変更→テスト→コミットを繰り返す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>動作を変えない</strong> - 構造だけを改善する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span><strong>AIに段階的に依頼</strong> - 一度に全部ではなくステップごと</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="clean-architecture.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                クリーンアーキテクチャをAIと実装
            </a>
            <a href="async-processing.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：非同期処理の実装
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
