<?php
$page_title = 'AIへの指示の出し方 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'setup';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第2部：開発環境とAIツール';
$step_number = 10;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIへの指示の出し方</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">AIを使いこなすカギは「指示の出し方（プロンプト）」です。具体的で明確な指示を出すことで、期待通りの結果が得られやすくなります。</p>
        </div>

        <!-- 基本原則 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">良い指示の基本原則</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-3 text-purple-600">1. 具体的に書く</h3>
                    <p class="mb-4">曖昧な表現を避け、何をしてほしいか明確に伝えましょう。</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-3 rounded">
                            <p class="text-red-600 font-bold text-sm mb-1">❌ 悪い例</p>
                            <p class="text-sm">「いい感じのボタンを作って」</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded">
                            <p class="text-green-600 font-bold text-sm mb-1">○ 良い例</p>
                            <p class="text-sm">「青色（#3B82F6）の背景、白文字、角丸8px、paddingは上下8px左右16pxのボタンを作って」</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-3 text-purple-600">2. 完成イメージを明確に伝える</h3>
                    <p class="mb-4">作りたいものの目的や動作を説明しましょう。</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-3 rounded">
                            <p class="text-red-600 font-bold text-sm mb-1">❌ 悪い例</p>
                            <p class="text-sm">「フォームを作って」</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded">
                            <p class="text-green-600 font-bold text-sm mb-1">○ 良い例</p>
                            <p class="text-sm">「ユーザー登録フォームを作って。名前、メール、パスワードを入力でき、送信ボタンを押したらAPIにPOSTする」</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-3 text-purple-600">3. 技術スタックを指定する</h3>
                    <p class="mb-4">使用する技術を明示すると、適切なコードが生成されます。</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-3 rounded">
                            <p class="text-red-600 font-bold text-sm mb-1">❌ 悪い例</p>
                            <p class="text-sm">「カウンターを作って」</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded">
                            <p class="text-green-600 font-bold text-sm mb-1">○ 良い例</p>
                            <p class="text-sm">「Next.js（App Router）とTypeScriptでカウンターを作って。スタイリングはTailwind CSS」</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-3 text-purple-600">4. 段階的に依頼する</h3>
                    <p class="mb-4">大きなタスクは小さなステップに分けて依頼しましょう。</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 p-3 rounded">
                            <p class="text-red-600 font-bold text-sm mb-1">❌ 悪い例</p>
                            <p class="text-sm">「Todoアプリを全部作って」</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded">
                            <p class="text-green-600 font-bold text-sm mb-1">○ 良い例</p>
                            <div class="text-sm">
                                <p>1. 「まずTodoの型定義を作って」</p>
                                <p>2. 「次にTodoリストを表示するコンポーネントを作って」</p>
                                <p>3. 「追加フォームを作って」</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- コンテキストの与え方 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">コンテキストの与え方</h2>

            <p class="mb-4">AIに現在の状況を伝えることで、より適切な回答が得られます。</p>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">現在のファイル構成を伝える</h3>
                    <div class="code-block p-3 rounded font-mono text-sm">
                        <p>現在のプロジェクト構成：</p>
                        <p>- src/app/page.tsx（メインページ）</p>
                        <p>- src/components/Button.tsx（ボタンコンポーネント）</p>
                        <p>- src/lib/api.ts（API通信）</p>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">関連するコードを共有する</h3>
                    <div class="code-block p-3 rounded font-mono text-sm">
                        <p>このコードに、エラーハンドリングを追加してください：</p>
                        <p class="text-gray-400 mt-2">```typescript</p>
                        <p>const response = await fetch('/api/todos');</p>
                        <p>const data = await response.json();</p>
                        <p class="text-gray-400">```</p>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">エラーメッセージをそのまま共有</h3>
                    <div class="code-block p-3 rounded font-mono text-sm">
                        <p>このエラーを修正してください：</p>
                        <p class="text-red-400 mt-2">TypeError: Cannot read property 'map' of undefined</p>
                        <p class="text-red-400">at TodoList (src/components/TodoList.tsx:15:23)</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 良い例・悪い例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">実践的な例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-lg">例1: コンポーネントの作成</h3>
                    <div class="bg-green-50 p-4 rounded mb-4">
                        <p class="text-green-600 font-bold text-sm mb-2">○ 良い指示</p>
                        <p class="text-sm">「Next.js（TypeScript）で、商品カードコンポーネントを作成してください。</p>
                        <p class="text-sm mt-2">仕様：</p>
                        <ul class="list-disc list-inside text-sm ml-2">
                            <li>props: 商品名(name)、価格(price)、画像URL(imageUrl)</li>
                            <li>画像は上部、名前と価格は下部に表示</li>
                            <li>カードにhover時に影を強くする</li>
                            <li>Tailwind CSSでスタイリング</li>
                        </ul>
                        <p class="text-sm mt-2">ファイル場所: src/components/ProductCard.tsx」</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-lg">例2: APIエンドポイントの作成</h3>
                    <div class="bg-green-50 p-4 rounded mb-4">
                        <p class="text-green-600 font-bold text-sm mb-2">○ 良い指示</p>
                        <p class="text-sm">「FastAPIで、ユーザーのCRUD APIを作成してください。</p>
                        <p class="text-sm mt-2">エンドポイント：</p>
                        <ul class="list-disc list-inside text-sm ml-2">
                            <li>GET /users - 全ユーザー取得</li>
                            <li>GET /users/{id} - 特定ユーザー取得</li>
                            <li>POST /users - ユーザー作成</li>
                            <li>DELETE /users/{id} - ユーザー削除</li>
                        </ul>
                        <p class="text-sm mt-2">Userモデル: id, name, email, created_at</p>
                        <p class="text-sm">Pydanticモデルも作成してください」</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-lg">例3: バグ修正</h3>
                    <div class="bg-green-50 p-4 rounded mb-4">
                        <p class="text-green-600 font-bold text-sm mb-2">○ 良い指示</p>
                        <p class="text-sm">「以下のエラーを修正してください。</p>
                        <p class="text-sm mt-2 font-mono bg-gray-100 p-2 rounded">TypeError: todos.map is not a function</p>
                        <p class="text-sm mt-2">現象：</p>
                        <ul class="list-disc list-inside text-sm ml-2">
                            <li>ページ読み込み時に発生</li>
                            <li>APIからデータ取得前に発生している模様</li>
                        </ul>
                        <p class="text-sm mt-2">該当ファイル: src/app/page.tsx」</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- テンプレート -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">プロンプトテンプレート</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-purple-600">新規コンポーネント作成</h3>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                        <p>[技術スタック]で、[コンポーネント名]を作成してください。</p>
                        <p class="mt-2">機能：</p>
                        <p>- [機能1]</p>
                        <p>- [機能2]</p>
                        <p class="mt-2">スタイル：Tailwind CSS</p>
                        <p>ファイル場所：[パス]</p>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-purple-600">APIエンドポイント作成</h3>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                        <p>FastAPIで[機能名]のAPIを作成してください。</p>
                        <p class="mt-2">エンドポイント：</p>
                        <p>- [メソッド] [パス] - [説明]</p>
                        <p class="mt-2">データモデル：[フィールド一覧]</p>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-purple-600">エラー修正</h3>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                        <p>以下のエラーを修正してください。</p>
                        <p class="mt-2">エラーメッセージ：</p>
                        <p>[エラー全文をコピペ]</p>
                        <p class="mt-2">発生状況：</p>
                        <p>- [いつ発生するか]</p>
                        <p>- [何をしたら発生するか]</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="cursor.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：Cursorの使い方
            </a>
            <a href="dev-flow.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：AIとの開発フロー
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
