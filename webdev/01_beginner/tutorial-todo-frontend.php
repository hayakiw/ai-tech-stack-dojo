<?php
$page_title = 'Todoアプリ - フロントエンド編 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'tutorial';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第3部：実践チュートリアル';
$step_number = 15;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Todoアプリ - フロントエンド編</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">Next.jsを使って、Todoアプリの画面を作成します。まずはモックデータで動く状態を作り、次のページでAPIと連携させます。</p>
        </div>

        <!-- 学ぶこと -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">このページで学ぶこと</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <div class="text-3xl mb-2">📝</div>
                    <p class="font-bold text-sm">TypeScriptの型定義</p>
                    <p class="text-xs text-gray-500 mt-1">データの形を決める</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <div class="text-3xl mb-2">🧩</div>
                    <p class="font-bold text-sm">Reactコンポーネント</p>
                    <p class="text-xs text-gray-500 mt-1">UIの部品を組み立てる</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <div class="text-3xl mb-2">🔄</div>
                    <p class="font-bold text-sm">useStateで状態管理</p>
                    <p class="text-xs text-gray-500 mt-1">データの変化に応じてUIを更新</p>
                </div>
            </div>
        </section>

        <!-- 完成イメージ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">完成イメージ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-center">Todoリスト</h3>
                <div class="max-w-md mx-auto">
                    <div class="flex mb-4">
                        <input type="text" placeholder="新しいTodoを入力..." class="flex-1 border rounded-l-lg px-4 py-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">追加</button>
                    </div>
                    <ul class="space-y-2">
                        <li class="flex items-center justify-between p-3 bg-gray-50 rounded">
                            <div class="flex items-center">
                                <input type="checkbox" class="mr-3">
                                <span>買い物に行く</span>
                            </div>
                            <button class="text-red-500">削除</button>
                        </li>
                        <li class="flex items-center justify-between p-3 bg-gray-50 rounded">
                            <div class="flex items-center">
                                <input type="checkbox" checked class="mr-3">
                                <span class="line-through text-gray-400">部屋を掃除する</span>
                            </div>
                            <button class="text-red-500">削除</button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Step 1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 1: Todoの型定義を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>frontend/src/types/todo.ts を作成して、
Todoの型定義を追加してください。

Todo型:
- id: number
- title: string
- completed: boolean</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード: src/types/todo.ts</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre><span class="text-purple-400">export interface</span> <span class="text-blue-400">Todo</span> {
  id: <span class="text-blue-400">number</span>;
  title: <span class="text-blue-400">string</span>;
  completed: <span class="text-blue-400">boolean</span>;
}</pre>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p class="text-sm"><strong>なぜ型定義を作る？</strong> TypeScriptの型定義は「データの設計図」です。Todoが必ず id・title・completed を持つことを宣言しておくと、コードを書くときにスペルミスや入れ忘れをエディタが自動で検出してくれます。</p>
            </div>
        </section>

        <!-- Step 2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 2: Todoリストコンポーネントを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>frontend/src/app/page.tsx を編集して、
Todoリストアプリを作成してください。

機能:
1. Todoの一覧表示
2. 新しいTodoの追加フォーム
3. Todoの完了/未完了の切り替え（チェックボックス）
4. Todoの削除ボタン
5. 完了したTodoは取り消し線を表示

まずはモックデータで動くようにしてください。
APIとの連携は後で行います。

使用技術:
- useState で状態管理
- Tailwind CSS でスタイリング</pre>
                </div>
            </div>
        </section>

        <!-- 完成コード -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">完成コード例: src/app/page.tsx</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">"use client"</span>;

<span class="text-purple-400">import</span> { useState } <span class="text-purple-400">from</span> <span class="text-green-400">"react"</span>;
<span class="text-purple-400">import</span> { Todo } <span class="text-purple-400">from</span> <span class="text-green-400">"@/types/todo"</span>;

<span class="text-gray-400">// モックデータ（仮のデータ）</span>
<span class="text-purple-400">const</span> initialTodos: Todo[] = [
  { id: <span class="text-yellow-400">1</span>, title: <span class="text-green-400">"買い物に行く"</span>, completed: <span class="text-purple-400">false</span> },
  { id: <span class="text-yellow-400">2</span>, title: <span class="text-green-400">"部屋を掃除する"</span>, completed: <span class="text-purple-400">true</span> },
];

<span class="text-purple-400">export default function</span> <span class="text-blue-400">Home</span>() {
  <span class="text-purple-400">const</span> [todos, setTodos] = useState&lt;Todo[]&gt;(initialTodos);
  <span class="text-purple-400">const</span> [newTitle, setNewTitle] = useState(<span class="text-green-400">""</span>);

  <span class="text-gray-400">// Todo追加</span>
  <span class="text-purple-400">const</span> addTodo = () => {
    <span class="text-purple-400">if</span> (!newTitle.trim()) <span class="text-purple-400">return</span>;
    <span class="text-purple-400">const</span> newTodo: Todo = {
      id: Date.now(),
      title: newTitle,
      completed: <span class="text-purple-400">false</span>,
    };
    setTodos([...todos, newTodo]);
    setNewTitle(<span class="text-green-400">""</span>);
  };

  <span class="text-gray-400">// 完了切り替え</span>
  <span class="text-purple-400">const</span> toggleTodo = (id: <span class="text-blue-400">number</span>) => {
    setTodos(todos.map(todo =>
      todo.id === id ? { ...todo, completed: !todo.completed } : todo
    ));
  };

  <span class="text-gray-400">// 削除</span>
  <span class="text-purple-400">const</span> deleteTodo = (id: <span class="text-blue-400">number</span>) => {
    setTodos(todos.filter(todo => todo.id !== id));
  };

  <span class="text-purple-400">return</span> (
    <span class="text-cyan-400">&lt;main</span> className=<span class="text-green-400">"min-h-screen p-8 max-w-md mx-auto"</span><span class="text-cyan-400">&gt;</span>
      <span class="text-cyan-400">&lt;h1</span> className=<span class="text-green-400">"text-2xl font-bold mb-6 text-center"</span><span class="text-cyan-400">&gt;</span>
        Todoリスト
      <span class="text-cyan-400">&lt;/h1&gt;</span>

      <span class="text-gray-400">{/* 追加フォーム */}</span>
      <span class="text-cyan-400">&lt;div</span> className=<span class="text-green-400">"flex mb-6"</span><span class="text-cyan-400">&gt;</span>
        <span class="text-cyan-400">&lt;input</span>
          type=<span class="text-green-400">"text"</span>
          value={newTitle}
          onChange={(e) => setNewTitle(e.target.value)}
          onKeyDown={(e) => e.key === <span class="text-green-400">"Enter"</span> && addTodo()}
          placeholder=<span class="text-green-400">"新しいTodoを入力..."</span>
          className=<span class="text-green-400">"flex-1 border rounded-l-lg px-4 py-2"</span>
        <span class="text-cyan-400">/&gt;</span>
        <span class="text-cyan-400">&lt;button</span>
          onClick={addTodo}
          className=<span class="text-green-400">"bg-blue-500 text-white px-4 py-2
            rounded-r-lg hover:bg-blue-600"</span>
        <span class="text-cyan-400">&gt;</span>
          追加
        <span class="text-cyan-400">&lt;/button&gt;</span>
      <span class="text-cyan-400">&lt;/div&gt;</span>

      <span class="text-gray-400">{/* Todoリスト */}</span>
      <span class="text-cyan-400">&lt;ul</span> className=<span class="text-green-400">"space-y-2"</span><span class="text-cyan-400">&gt;</span>
        {todos.map((todo) => (
          <span class="text-cyan-400">&lt;li</span>
            key={todo.id}
            className=<span class="text-green-400">"flex items-center justify-between
              p-3 bg-gray-50 rounded"</span>
          <span class="text-cyan-400">&gt;</span>
            <span class="text-cyan-400">&lt;div</span> className=<span class="text-green-400">"flex items-center"</span><span class="text-cyan-400">&gt;</span>
              <span class="text-cyan-400">&lt;input</span>
                type=<span class="text-green-400">"checkbox"</span>
                checked={todo.completed}
                onChange={() => toggleTodo(todo.id)}
                className=<span class="text-green-400">"mr-3"</span>
              <span class="text-cyan-400">/&gt;</span>
              <span class="text-cyan-400">&lt;span</span>
                className={todo.completed ?
                  <span class="text-green-400">"line-through text-gray-400"</span> : <span class="text-green-400">""</span>}
              <span class="text-cyan-400">&gt;</span>
                {todo.title}
              <span class="text-cyan-400">&lt;/span&gt;</span>
            <span class="text-cyan-400">&lt;/div&gt;</span>
            <span class="text-cyan-400">&lt;button</span>
              onClick={() => deleteTodo(todo.id)}
              className=<span class="text-green-400">"text-red-500 hover:text-red-700"</span>
            <span class="text-cyan-400">&gt;</span>
              削除
            <span class="text-cyan-400">&lt;/button&gt;</span>
          <span class="text-cyan-400">&lt;/li&gt;</span>
        ))}
      <span class="text-cyan-400">&lt;/ul&gt;</span>
    <span class="text-cyan-400">&lt;/main&gt;</span>
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- コード解説 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">コードの解説</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-700">"use client" とは？</h3>
                    <p class="text-sm text-gray-600 mb-2">Next.jsのApp Routerでは、デフォルトでコンポーネントはサーバー側で実行されます（Server Component）。しかし <code class="bg-gray-100 px-1 rounded">useState</code> や <code class="bg-gray-100 px-1 rounded">onClick</code> のようなブラウザ上の操作が必要な場合は、ファイルの先頭に <code class="bg-gray-100 px-1 rounded">"use client"</code> と書いて「クライアントコンポーネント」にする必要があります。</p>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 mt-3">
                        <p class="text-xs text-gray-600"><strong>覚え方：</strong>ユーザーが操作するもの（ボタンクリック、入力フォーム、状態の変更）があるページには <code class="bg-gray-100 px-1 rounded">"use client"</code> が必要。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-700">useState で状態管理</h3>
                    <p class="text-sm text-gray-600 mb-3">このコードでは2つの状態を管理しています：</p>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border p-2 text-left">変数</th>
                                    <th class="border p-2 text-left">初期値</th>
                                    <th class="border p-2 text-left">役割</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border p-2"><code class="bg-gray-100 px-1 rounded">todos</code></td>
                                    <td class="border p-2">initialTodos（モックデータ）</td>
                                    <td class="border p-2">Todoの一覧データを保持</td>
                                </tr>
                                <tr>
                                    <td class="border p-2"><code class="bg-gray-100 px-1 rounded">newTitle</code></td>
                                    <td class="border p-2">""（空文字）</td>
                                    <td class="border p-2">入力フォームの現在の値</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-sm text-gray-500 mt-3"><code class="bg-gray-100 px-1 rounded">setTodos</code> や <code class="bg-gray-100 px-1 rounded">setNewTitle</code> を呼ぶと値が更新され、画面が自動的に再描画されます。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-700">3つの操作関数</h3>
                    <div class="space-y-4">
                        <div class="border-l-4 border-green-400 pl-4">
                            <p class="font-semibold text-sm">addTodo（追加）</p>
                            <p class="text-sm text-gray-600"><code class="bg-gray-100 px-1 rounded">[...todos, newTodo]</code> で既存配列に新しいTodoを追加。<code class="bg-gray-100 px-1 rounded">...todos</code> は「スプレッド構文」と呼ばれ、配列をコピーして展開します。</p>
                        </div>
                        <div class="border-l-4 border-blue-400 pl-4">
                            <p class="font-semibold text-sm">toggleTodo（完了切り替え）</p>
                            <p class="text-sm text-gray-600"><code class="bg-gray-100 px-1 rounded">todos.map()</code> で配列をループし、クリックしたTodoの <code class="bg-gray-100 px-1 rounded">completed</code> を反転。<code class="bg-gray-100 px-1 rounded">{ ...todo, completed: !todo.completed }</code> はオブジェクトの一部だけ書き換えるテクニックです。</p>
                        </div>
                        <div class="border-l-4 border-red-400 pl-4">
                            <p class="font-semibold text-sm">deleteTodo（削除）</p>
                            <p class="text-sm text-gray-600"><code class="bg-gray-100 px-1 rounded">todos.filter()</code> で条件に合わないもの（=削除対象）を除外した新しい配列を作成。Reactでは配列を直接変更せず、新しい配列を作って置き換えます。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-700">JSXの描画部分</h3>
                    <div class="space-y-3 text-sm text-gray-600">
                        <div class="flex items-start gap-2">
                            <span class="bg-purple-100 text-purple-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">key</span>
                            <p><code class="bg-gray-100 px-1 rounded">key={todo.id}</code> — Reactがリストの各要素を効率的に更新するための目印。keyがないと警告が出ます。</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="bg-purple-100 text-purple-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">条件付きclass</span>
                            <p><code class="bg-gray-100 px-1 rounded">className={todo.completed ? "line-through ..." : ""}</code> — 完了状態に応じてスタイルを切り替え。三項演算子（<code class="bg-gray-100 px-1 rounded">条件 ? A : B</code>）を使っています。</p>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="bg-purple-100 text-purple-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">Enter対応</span>
                            <p><code class="bg-gray-100 px-1 rounded">onKeyDown={(e) => e.key === "Enter" && addTodo()}</code> — Enterキーでも追加できるようにするイベントハンドラ。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 動作確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 3: 動作確認</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <ol class="list-decimal list-inside space-y-3">
                    <li>フロントエンドサーバーを起動: <code class="bg-gray-200 px-2 py-1 rounded">npm run dev</code></li>
                    <li>ブラウザで <a href="http://localhost:3000" class="text-blue-600 hover:underline">http://localhost:3000</a> を開く</li>
                    <li>以下を確認:
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>Todoが一覧表示されている</li>
                            <li>新しいTodoを追加できる（ボタンクリック＆Enterキー両方）</li>
                            <li>チェックボックスで完了/未完了を切り替えられる（取り消し線が出る）</li>
                            <li>削除ボタンで削除できる</li>
                            <li>空欄のまま「追加」を押しても何も起きない（バリデーション）</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-6">
                <p><strong>注意：</strong>この時点ではデータはメモリ上にあるため、ページをリロードすると初期状態に戻ります。次のページでAPIと連携して永続化します。</p>
            </div>

            <div class="bg-red-50 border-l-4 border-red-400 p-4">
                <h3 class="font-bold text-red-700 mb-2">うまく動かないときは</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li><strong>画面が真っ白：</strong>ブラウザのDevTools（F12）→ Console タブでエラーを確認。Claude Codeにエラーメッセージを伝えましょう。</li>
                    <li><strong>"use client" エラー：</strong>ファイルの1行目に <code class="bg-gray-100 px-1 rounded">"use client";</code> があるか確認。</li>
                    <li><strong>型エラー：</strong>Todo型のインポートパスが <code class="bg-gray-100 px-1 rounded">@/types/todo</code> になっているか確認。</li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="tutorial-todo-backend.php" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：バックエンド編
            </a>
            <a href="tutorial-todo-integration.php" class="flex items-center bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                次へ：連携編
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
