<?php
$page_title = 'FastAPI基礎 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'basics';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }\n        .keyword { color: #c084fc; }\n        .string { color: #86efac; }\n        .number { color: #fcd34d; }\n        .comment { color: #64748b; }\n        .function { color: #60a5fa; }\n        .decorator { color: #f472b6; }';
$section_name = '第1部：Web開発の基礎知識';
$step_number = 6;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">FastAPI基礎</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">FastAPIは、Pythonで高速なAPIを作るためのフレームワークです。シンプルな記述で、フロントエンドと連携するバックエンドを構築できます。</p>
        </div>

        <!-- セクション1: FastAPIとは -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">FastAPIとは</h2>

            <div class="grid md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <div class="text-3xl mb-2">⚡</div>
                    <h3 class="font-bold">高速</h3>
                    <p class="text-sm text-gray-600">Node.jsと同等の高速性能</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <div class="text-3xl mb-2">📝</div>
                    <h3 class="font-bold">シンプル</h3>
                    <p class="text-sm text-gray-600">少ないコードで書ける</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <div class="text-3xl mb-2">📚</div>
                    <h3 class="font-bold">自動ドキュメント</h3>
                    <p class="text-sm text-gray-600">APIドキュメントが自動生成</p>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">最小限のFastAPIアプリ</h3>
            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="keyword">from</span> fastapi <span class="keyword">import</span> FastAPI

<span class="comment"># アプリケーションを作成</span>
<span class="function">app</span> = FastAPI()

<span class="comment"># GETリクエストを受け取るエンドポイント</span>
<span class="decorator">@app.get</span>(<span class="string">"/"</span>)
<span class="keyword">def</span> <span class="function">read_root</span>():
    <span class="keyword">return</span> {<span class="string">"message"</span>: <span class="string">"Hello, World!"</span>}</pre>
            </div>

            <p class="text-sm text-gray-600">これだけで、<code class="bg-gray-200 px-1 rounded">http://localhost:8000/</code>にアクセスすると<code class="bg-gray-200 px-1 rounded">{"message": "Hello, World!"}</code>が返ってきます。</p>
        </section>

        <!-- セクション2: HTTPメソッド -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">HTTPメソッド（GET/POST/PUT/DELETE）</h2>

            <p class="mb-4">APIには4つの基本的な操作があります。これをCRUD（Create, Read, Update, Delete）と呼びます。</p>

            <div class="bg-white p-4 rounded-lg shadow mb-6 overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">メソッド</th>
                            <th class="p-3">用途</th>
                            <th class="p-3">例</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded font-bold">GET</span></td>
                            <td class="p-3">データを取得</td>
                            <td class="p-3">Todoの一覧を取得</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded font-bold">POST</span></td>
                            <td class="p-3">新規作成</td>
                            <td class="p-3">新しいTodoを追加</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded font-bold">PUT</span></td>
                            <td class="p-3">更新</td>
                            <td class="p-3">Todoを完了にする</td>
                        </tr>
                        <tr>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded font-bold">DELETE</span></td>
                            <td class="p-3">削除</td>
                            <td class="p-3">Todoを削除</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="keyword">from</span> fastapi <span class="keyword">import</span> FastAPI

<span class="function">app</span> = FastAPI()

<span class="comment"># 仮のデータベース</span>
<span class="function">todos</span> = [
    {<span class="string">"id"</span>: <span class="number">1</span>, <span class="string">"title"</span>: <span class="string">"買い物"</span>, <span class="string">"completed"</span>: <span class="keyword">False</span>},
    {<span class="string">"id"</span>: <span class="number">2</span>, <span class="string">"title"</span>: <span class="string">"掃除"</span>, <span class="string">"completed"</span>: <span class="keyword">True</span>},
]

<span class="comment"># GET: 一覧を取得</span>
<span class="decorator">@app.get</span>(<span class="string">"/todos"</span>)
<span class="keyword">def</span> <span class="function">get_todos</span>():
    <span class="keyword">return</span> <span class="function">todos</span>

<span class="comment"># GET: 1件を取得</span>
<span class="decorator">@app.get</span>(<span class="string">"/todos/{todo_id}"</span>)
<span class="keyword">def</span> <span class="function">get_todo</span>(<span class="function">todo_id</span>: <span class="function">int</span>):
    <span class="keyword">for</span> <span class="function">todo</span> <span class="keyword">in</span> <span class="function">todos</span>:
        <span class="keyword">if</span> <span class="function">todo</span>[<span class="string">"id"</span>] == <span class="function">todo_id</span>:
            <span class="keyword">return</span> <span class="function">todo</span>
    <span class="keyword">return</span> {<span class="string">"error"</span>: <span class="string">"Not found"</span>}

<span class="comment"># POST: 新規作成</span>
<span class="decorator">@app.post</span>(<span class="string">"/todos"</span>)
<span class="keyword">def</span> <span class="function">create_todo</span>(<span class="function">title</span>: <span class="function">str</span>):
    <span class="function">new_todo</span> = {<span class="string">"id"</span>: <span class="function">len</span>(<span class="function">todos</span>) + <span class="number">1</span>, <span class="string">"title"</span>: <span class="function">title</span>, <span class="string">"completed"</span>: <span class="keyword">False</span>}
    <span class="function">todos</span>.<span class="function">append</span>(<span class="function">new_todo</span>)
    <span class="keyword">return</span> <span class="function">new_todo</span>

<span class="comment"># DELETE: 削除</span>
<span class="decorator">@app.delete</span>(<span class="string">"/todos/{todo_id}"</span>)
<span class="keyword">def</span> <span class="function">delete_todo</span>(<span class="function">todo_id</span>: <span class="function">int</span>):
    <span class="keyword">for</span> <span class="function">i</span>, <span class="function">todo</span> <span class="keyword">in</span> <span class="function">enumerate</span>(<span class="function">todos</span>):
        <span class="keyword">if</span> <span class="function">todo</span>[<span class="string">"id"</span>] == <span class="function">todo_id</span>:
            <span class="function">todos</span>.<span class="function">pop</span>(<span class="function">i</span>)
            <span class="keyword">return</span> {<span class="string">"message"</span>: <span class="string">"Deleted"</span>}
    <span class="keyword">return</span> {<span class="string">"error"</span>: <span class="string">"Not found"</span>}</pre>
            </div>
        </section>

        <!-- セクション3: パラメータ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">パラメータの受け取り方</h2>

            <div class="space-y-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-purple-600">パスパラメータ</h3>
                    <p class="text-sm text-gray-600 mb-2">URL内の{変数名}で受け取る</p>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="decorator">@app.get</span>(<span class="string">"/todos/{todo_id}"</span>)
<span class="keyword">def</span> <span class="function">get_todo</span>(<span class="function">todo_id</span>: <span class="function">int</span>):
    <span class="keyword">return</span> {<span class="string">"id"</span>: <span class="function">todo_id</span>}

<span class="comment"># /todos/123 → todo_id = 123</span></pre>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-purple-600">クエリパラメータ</h3>
                    <p class="text-sm text-gray-600 mb-2">URL末尾の?key=valueで受け取る</p>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="decorator">@app.get</span>(<span class="string">"/todos"</span>)
<span class="keyword">def</span> <span class="function">get_todos</span>(<span class="function">completed</span>: <span class="function">bool</span> = <span class="keyword">None</span>):
    <span class="keyword">if</span> <span class="function">completed</span> <span class="keyword">is not None</span>:
        <span class="keyword">return</span> [t <span class="keyword">for</span> t <span class="keyword">in</span> <span class="function">todos</span> <span class="keyword">if</span> t[<span class="string">"completed"</span>] == <span class="function">completed</span>]
    <span class="keyword">return</span> <span class="function">todos</span>

<span class="comment"># /todos?completed=true → 完了済みのみ</span></pre>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-purple-600">リクエストボディ（Pydanticモデル）</h3>
                    <p class="text-sm text-gray-600 mb-2">JSONデータを受け取る（POST/PUTで使用）</p>
                    <div class="code-block p-2 rounded text-sm font-mono">
<pre><span class="keyword">from</span> pydantic <span class="keyword">import</span> BaseModel

<span class="keyword">class</span> <span class="function">TodoCreate</span>(BaseModel):
    <span class="function">title</span>: <span class="function">str</span>
    <span class="function">completed</span>: <span class="function">bool</span> = <span class="keyword">False</span>

<span class="decorator">@app.post</span>(<span class="string">"/todos"</span>)
<span class="keyword">def</span> <span class="function">create_todo</span>(<span class="function">todo</span>: <span class="function">TodoCreate</span>):
    <span class="keyword">return</span> {<span class="string">"title"</span>: <span class="function">todo</span>.<span class="function">title</span>, <span class="string">"completed"</span>: <span class="function">todo</span>.<span class="function">completed</span>}

<span class="comment"># リクエスト: {"title": "買い物", "completed": false}</span></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4: 自動ドキュメント -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">自動生成されるドキュメント</h2>

            <p class="mb-4">FastAPIの大きな特徴は、APIドキュメントが自動で生成されることです。</p>

            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">アクセス方法</h3>
                <ul class="space-y-2">
                    <li>
                        <span class="bg-gray-200 px-2 py-1 rounded font-mono">http://localhost:8000/docs</span>
                        <span class="text-gray-600 ml-2">- Swagger UI（インタラクティブ）</span>
                    </li>
                    <li>
                        <span class="bg-gray-200 px-2 py-1 rounded font-mono">http://localhost:8000/redoc</span>
                        <span class="text-gray-600 ml-2">- ReDoc（読みやすい形式）</span>
                    </li>
                </ul>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>便利！</strong>/docsページでは、ブラウザからAPIを実際にテストできます。フロントエンドを作る前にAPIの動作確認ができて便利です。</p>
            </div>
        </section>

        <!-- セクション5: CORS設定 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">CORS設定（フロントエンドと連携するために）</h2>

            <p class="mb-4">Next.js（フロントエンド）からFastAPI（バックエンド）にアクセスするには、CORS設定が必要です。</p>

            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="keyword">from</span> fastapi <span class="keyword">import</span> FastAPI
<span class="keyword">from</span> fastapi.middleware.cors <span class="keyword">import</span> CORSMiddleware

<span class="function">app</span> = FastAPI()

<span class="comment"># CORSの設定</span>
<span class="function">app</span>.<span class="function">add_middleware</span>(
    CORSMiddleware,
    allow_origins=[<span class="string">"http://localhost:3000"</span>],  <span class="comment"># Next.jsのURL</span>
    allow_credentials=<span class="keyword">True</span>,
    allow_methods=[<span class="string">"*"</span>],  <span class="comment"># すべてのHTTPメソッドを許可</span>
    allow_headers=[<span class="string">"*"</span>],  <span class="comment"># すべてのヘッダーを許可</span>
)</pre>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>エラーが出たら：</strong>「CORS error」が出たら、この設定が抜けていないか確認しましょう。</p>
            </div>
        </section>

        <!-- セクション6: コードの読み方 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">コードの読み方のコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">1. デコレータ（@app.xxx）を見る</h3>
                    <p class="text-sm text-gray-600"><code class="bg-gray-200 px-1 rounded">@app.get("/todos")</code>なら「/todosへのGETリクエスト」を処理する関数だとわかる。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">2. 関数の引数を見る</h3>
                    <p class="text-sm text-gray-600">引数はリクエストから受け取るデータ。型ヒントでどんなデータかわかる。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">3. returnを見る</h3>
                    <p class="text-sm text-gray-600"><code class="bg-gray-200 px-1 rounded">return</code>で返しているものが、APIのレスポンス（JSON）になる。</p>
                </div>
            </div>
        </section>

        <!-- 練習問題 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200 text-green-700">練習問題</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q1. 新しいデータを作成するときに使うHTTPメソッドは？</h3>
                    <div class="space-y-2" id="q1">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="a" class="mr-3">
                            <span>A. GET</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="b" class="mr-3">
                            <span>B. POST</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="c" class="mr-3">
                            <span>C. DELETE</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q1', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q1-result" class="mt-3 hidden"></div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q2. 次のエンドポイントにアクセスするURLは？</h3>
                    <div class="code-block p-2 rounded mb-3 font-mono text-sm">
<pre><span class="decorator">@app.get</span>(<span class="string">"/users/{user_id}"</span>)
<span class="keyword">def</span> <span class="function">get_user</span>(<span class="function">user_id</span>: <span class="function">int</span>):
    ...</pre>
                    </div>
                    <div class="space-y-2" id="q2">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="a" class="mr-3">
                            <span>A. /users?id=5</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="b" class="mr-3">
                            <span>B. /users/5</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="c" class="mr-3">
                            <span>C. /users/user_id/5</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q2', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q2-result" class="mt-3 hidden"></div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q3. FastAPIのドキュメントを見るURLは？</h3>
                    <div class="space-y-2" id="q3">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="a" class="mr-3">
                            <span>A. /api</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="b" class="mr-3">
                            <span>B. /docs</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="c" class="mr-3">
                            <span>C. /help</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q3', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q3-result" class="mt-3 hidden"></div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">まとめ</h2>
            <div class="bg-purple-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>FastAPIは<code class="bg-white px-1 rounded">@app.get</code>などのデコレータでエンドポイントを定義</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>CRUD操作：GET（取得）、POST（作成）、PUT（更新）、DELETE（削除）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>パスパラメータ<code class="bg-white px-1 rounded">{id}</code>とクエリパラメータ<code class="bg-white px-1 rounded">?key=value</code>でデータを受け取る</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">/docs</code>で自動生成されたAPIドキュメントを確認できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>フロントエンドと連携するにはCORS設定が必要</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- 第1部完了 -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-green-700 mb-2">第1部完了！</h3>
            <p class="text-green-600">基礎知識の学習が完了しました。次は開発環境を準備して、実際にコードを書いていきましょう。</p>
        </div>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="nextjs-basics.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：React/Next.js基礎
            </a>
            <a href="setup.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700">
                次へ：開発環境の準備
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
    <script>
        function checkAnswer(questionId, correctAnswer, button) {
            const selected = document.querySelector(`input[name="${questionId}"]:checked`);
            const resultDiv = document.getElementById(`${questionId}-result`);

            if (!selected) {
                resultDiv.innerHTML = '<p class="text-yellow-600">選択肢を選んでください</p>';
                resultDiv.classList.remove('hidden');
                return;
            }

            if (selected.value === correctAnswer) {
                resultDiv.innerHTML = '<p class="text-green-600 font-bold">正解です！</p>';
            } else {
                resultDiv.innerHTML = '<p class="text-red-600">不正解です。もう一度考えてみましょう。</p>';
            }
            resultDiv.classList.remove('hidden');
        }
    </script>

<?php include 'includes/footer.php'; ?>
