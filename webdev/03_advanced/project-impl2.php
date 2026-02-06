<?php
$page_title = '実装フェーズ2 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 34;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">実装フェーズ2：高度な機能</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">ドラッグ&ドロップ、リアルタイム同期など、高度な機能をClaude Codeで実装します。</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow mb-10">
            <h3 class="font-bold text-lg mb-4">Phase 2 で実装する機能</h3>
            <div class="space-y-2">
                <div class="bg-gray-50 p-3 rounded-lg flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">1</span>
                    <span>dnd-kitによるドラッグ&ドロップ</span>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">2</span>
                    <span>WebSocketリアルタイム同期</span>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">3</span>
                    <span>楽観的更新（Optimistic Update）</span>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">4</span>
                    <span>チームメンバー招待機能</span>
                </div>
            </div>
        </div>

        <!-- ステップ1: ドラッグ&ドロップ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ1：dnd-kitによるドラッグ&ドロップ</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>@dnd-kit/core と @dnd-kit/sortable を使って、カンバンボードの
ドラッグ&ドロップを実装してください。

【要件】
- 3つのカラム（todo / in_progress / done）間でタスクを移動
- 同一カラム内でタスクの順序を変更可能
- ドロップ時にバックエンドAPIを呼んでステータスと順序を更新
- ドラッグ中のビジュアルフィードバック（半透明＋シャドウ）
- モバイルでもタッチ操作でドラッグ可能

【技術スタック】
- @dnd-kit/core, @dnd-kit/sortable, @dnd-kit/utilities
- 既存の TanStack Query によるタスク取得と連携
- PATCH /tasks/{id} でステータス・順序を更新

段階的に実装してください：
1. まずパッケージインストールと基本構造
2. カラム間のドラッグ&ドロップ
3. カラム内の並び替え
4. API連携とエラーハンドリング</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Claude Codeが行うこと</h3>
                <div class="space-y-2 text-sm">
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>npm install @dnd-kit/core @dnd-kit/sortable @dnd-kit/utilities</code> を実行</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/kanban/KanbanBoard.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/kanban/SortableColumn.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/kanban/SortableTaskCard.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/hooks/useTaskDragDrop.ts</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; 既存の <code>ProjectPage.tsx</code> にカンバンボードを統合</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：KanbanBoard コンポーネント</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/components/kanban/KanbanBoard.tsx</span>
import { DndContext, DragOverlay, closestCorners,
         PointerSensor, TouchSensor, useSensors, useSensor } from '@dnd-kit/core';
import { SortableContext, verticalListSortingStrategy } from '@dnd-kit/sortable';
import { useState } from 'react';
import { SortableColumn } from './SortableColumn';
import { TaskCard } from './TaskCard';
import { useTaskDragDrop } from '@/hooks/useTaskDragDrop';

const COLUMNS = [
  { id: 'todo', title: 'Todo', color: 'bg-gray-100' },
  { id: 'in_progress', title: 'In Progress', color: 'bg-blue-50' },
  { id: 'done', title: 'Done', color: 'bg-green-50' },
];

export function KanbanBoard({ projectId }: { projectId: string }) {
  const { tasks, handleDragStart, handleDragOver,
          handleDragEnd, activeTask } = useTaskDragDrop(projectId);

  <span class="text-green-400">// マウスとタッチの両方に対応</span>
  const sensors = useSensors(
    useSensor(PointerSensor, {
      activationConstraint: { distance: 8 },
    }),
    useSensor(TouchSensor, {
      activationConstraint: { delay: 200, tolerance: 5 },
    }),
  );

  return (
    &lt;DndContext
      sensors={sensors}
      collisionDetection={closestCorners}
      onDragStart={handleDragStart}
      onDragOver={handleDragOver}
      onDragEnd={handleDragEnd}
    &gt;
      &lt;div className="grid grid-cols-1 md:grid-cols-3 gap-4"&gt;
        {COLUMNS.map((column) =&gt; (
          &lt;SortableColumn
            key={column.id}
            column={column}
            tasks={tasks.filter(t =&gt; t.status === column.id)}
          /&gt;
        ))}
      &lt;/div&gt;

      <span class="text-green-400">{/* ドラッグ中のオーバーレイ表示 */}</span>
      &lt;DragOverlay&gt;
        {activeTask ? &lt;TaskCard task={activeTask} isDragging /&gt; : null}
      &lt;/DragOverlay&gt;
    &lt;/DndContext&gt;
  );
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：SortableTaskCard コンポーネント</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/components/kanban/SortableTaskCard.tsx</span>
import { useSortable } from '@dnd-kit/sortable';
import { CSS } from '@dnd-kit/utilities';
import { TaskCard } from './TaskCard';
import type { Task } from '@/types';

export function SortableTaskCard({ task }: { task: Task }) {
  const {
    attributes,
    listeners,
    setNodeRef,
    transform,
    transition,
    isDragging,
  } = useSortable({ id: task.id });

  const style = {
    transform: CSS.Transform.toString(transform),
    transition,
    opacity: isDragging ? 0.5 : 1,
  };

  return (
    &lt;div ref={setNodeRef} style={style} {...attributes} {...listeners}&gt;
      &lt;TaskCard task={task} isDragging={isDragging} /&gt;
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">&#10003; 動作確認</h4>
                <ol class="space-y-1 text-sm list-decimal list-inside">
                    <li>ブラウザで <code>http://localhost:3000</code> を開く</li>
                    <li>プロジェクトを選択してカンバンボードを表示</li>
                    <li>タスクカードをドラッグして別のカラムにドロップ</li>
                    <li>ステータスが変更されることを確認</li>
                    <li>同じカラム内でタスクの順序を入れ替え</li>
                    <li>ページをリロードして変更が永続化されていることを確認</li>
                </ol>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-5 rounded">
                <h4 class="font-bold mb-2">注意点</h4>
                <ul class="space-y-1 text-sm">
                    <li>・<strong>@dnd-kit/sortable</strong> は SortableContext の中でのみ動作します</li>
                    <li>・<strong>activationConstraint</strong> を設定しないと、クリックイベントとドラッグが競合します</li>
                    <li>・<strong>DragOverlay</strong> を使うと、ドラッグ中の要素が元の位置から分離して表示されます</li>
                </ul>
            </div>
        </section>

        <!-- ステップ2: WebSocketリアルタイム同期 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ2：WebSocketリアルタイム同期</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>WebSocketでリアルタイム同期を実装してください。

【バックエンド要件】
- FastAPIのWebSocketエンドポイント（/ws/{project_id}）
- Redis Pub/Sub でメッセージをブロードキャスト
- ConnectionManager クラスでルーム管理（プロジェクト単位）
- 接続/切断時のユーザー通知
- JWTトークンによるWebSocket認証

【フロントエンド要件】
- useWebSocket カスタムフックを作成
- 自動再接続ロジック（指数バックオフ）
- WebSocketメッセージ受信時に TanStack Query のキャッシュを無効化
- 接続状態のインジケーター表示

【メッセージ形式】
{
  "type": "task_created" | "task_updated" | "task_deleted",
  "payload": { ... },
  "user_id": "送信者ID"
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Claude Codeが行うこと</h3>
                <div class="space-y-2 text-sm">
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>backend/app/websocket/manager.py</code> を作成（ConnectionManager）</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>backend/app/websocket/routes.py</code> を作成（WebSocketエンドポイント）</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>backend/app/services/notification.py</code> を作成（Redis Pub/Sub）</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/hooks/useWebSocket.ts</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/ConnectionStatus.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; 既存のタスクCRUDにWebSocket通知を追加</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：ConnectionManager（バックエンド）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/app/websocket/manager.py</span>
from fastapi import WebSocket
from typing import Dict, Set
import json

class ConnectionManager:
    """プロジェクト単位のWebSocket接続を管理"""

    def __init__(self):
        <span class="text-green-400"># { project_id: { user_id: WebSocket } }</span>
        self.rooms: Dict[str, Dict[str, WebSocket]] = {}

    async def connect(
        self, websocket: WebSocket,
        project_id: str, user_id: str
    ):
        await websocket.accept()
        if project_id not in self.rooms:
            self.rooms[project_id] = {}
        self.rooms[project_id][user_id] = websocket

        <span class="text-green-400"># 他のメンバーに参加を通知</span>
        await self.broadcast(project_id, {
            "type": "user_joined",
            "payload": {"user_id": user_id},
        }, exclude=user_id)

    async def disconnect(self, project_id: str, user_id: str):
        if project_id in self.rooms:
            self.rooms[project_id].pop(user_id, None)
            if not self.rooms[project_id]:
                del self.rooms[project_id]

        <span class="text-green-400"># 他のメンバーに退出を通知</span>
        await self.broadcast(project_id, {
            "type": "user_left",
            "payload": {"user_id": user_id},
        })

    async def broadcast(
        self, project_id: str,
        message: dict, exclude: str = None
    ):
        """プロジェクト内の全接続にメッセージを送信"""
        if project_id not in self.rooms:
            return
        for uid, ws in self.rooms[project_id].items():
            if uid != exclude:
                try:
                    await ws.send_json(message)
                except Exception:
                    <span class="text-green-400"># 送信失敗時は切断扱い</span>
                    await self.disconnect(project_id, uid)

manager = ConnectionManager()</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：useWebSocket フック（フロントエンド）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/hooks/useWebSocket.ts</span>
import { useEffect, useRef, useCallback, useState } from 'react';
import { useQueryClient } from '@tanstack/react-query';

type ConnectionState = 'connecting' | 'connected' | 'disconnected';

export function useWebSocket(projectId: string, token: string) {
  const wsRef = useRef&lt;WebSocket | null&gt;(null);
  const queryClient = useQueryClient();
  const [state, setState] = useState&lt;ConnectionState&gt;('disconnected');
  const retryCount = useRef(0);

  const connect = useCallback(() =&gt; {
    const ws = new WebSocket(
      `ws://localhost:8000/ws/${projectId}?token=${token}`
    );

    ws.onopen = () =&gt; {
      setState('connected');
      retryCount.current = 0;
    };

    ws.onmessage = (event) =&gt; {
      const data = JSON.parse(event.data);

      <span class="text-green-400">// メッセージタイプに応じてキャッシュを無効化</span>
      switch (data.type) {
        case 'task_created':
        case 'task_updated':
        case 'task_deleted':
          queryClient.invalidateQueries({
            queryKey: ['tasks', projectId],
          });
          break;
        case 'user_joined':
        case 'user_left':
          queryClient.invalidateQueries({
            queryKey: ['members', projectId],
          });
          break;
      }
    };

    ws.onclose = () =&gt; {
      setState('disconnected');
      <span class="text-green-400">// 指数バックオフで再接続</span>
      const delay = Math.min(1000 * 2 ** retryCount.current, 30000);
      retryCount.current += 1;
      setTimeout(connect, delay);
    };

    wsRef.current = ws;
  }, [projectId, token, queryClient]);

  useEffect(() =&gt; {
    connect();
    return () =&gt; wsRef.current?.close();
  }, [connect]);

  return { state, ws: wsRef.current };
}</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">&#10003; 動作確認</h4>
                <ol class="space-y-1 text-sm list-decimal list-inside">
                    <li>ブラウザで2つのタブを開き、同じプロジェクトページを表示</li>
                    <li>タブAでタスクを新規作成</li>
                    <li>タブBにリアルタイムでタスクが表示されることを確認</li>
                    <li>タブBでタスクのステータスを変更し、タブAに反映されることを確認</li>
                    <li>接続状態インジケーターが「接続中」と表示されていることを確認</li>
                    <li>バックエンドを一時停止し、再起動後に自動再接続されることを確認</li>
                </ol>
            </div>

            <div class="bg-red-50 border-l-4 border-red-500 p-5 rounded">
                <h4 class="font-bold mb-2">よくあるエラー</h4>
                <ul class="space-y-2 text-sm">
                    <li>・<strong>WebSocket connection failed</strong> - CORSの設定を確認。FastAPIの <code>allow_origins</code> にフロントエンドのURLを追加</li>
                    <li>・<strong>Token validation error</strong> - WebSocketのクエリパラメータでトークンを渡す場合、HTTPヘッダーは使えないため注意</li>
                    <li>・<strong>メモリリーク</strong> - コンポーネントのアンマウント時に <code>ws.close()</code> を忘れずに呼ぶ</li>
                </ul>
            </div>
        </section>

        <!-- ステップ3: 楽観的更新 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ3：楽観的更新（Optimistic Update）</h2>

            <div class="bg-purple-50 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">楽観的更新とは？</h4>
                <p class="text-sm mb-3">APIレスポンスを待たずにUIを即座に更新し、エラーが発生した場合のみ元の状態にロールバックする手法です。ドラッグ&ドロップなど、即座のフィードバックが重要な操作で効果を発揮します。</p>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div class="bg-white p-3 rounded">
                        <p class="font-bold text-green-600 mb-1">通常の更新</p>
                        <p>操作 → API通信 → レスポンス → UI更新</p>
                        <p class="text-gray-500 text-xs mt-1">体感：遅い（200-500ms待ち）</p>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <p class="font-bold text-purple-600 mb-1">楽観的更新</p>
                        <p>操作 → UI即更新 → API通信 → 確認/ロールバック</p>
                        <p class="text-gray-500 text-xs mt-1">体感：瞬時（0ms待ち）</p>
                    </div>
                </div>
            </div>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TanStack Query を使った楽観的更新を実装してください。

【対象操作】
- タスクのステータス変更（ドラッグ&ドロップ連動）
- タスクのタイトル・説明の編集
- タスクの削除

【要件】
- useMutation の onMutate でキャッシュを即時更新
- onError で前の状態にロールバック
- onSettled で最新データを再取得
- エラー時はトースト通知でユーザーに知らせる
- 自分の操作はWebSocket通知を無視（二重更新防止）</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Claude Codeが行うこと</h3>
                <div class="space-y-2 text-sm">
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/hooks/useUpdateTask.ts</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/hooks/useDeleteTask.ts</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; 既存の <code>useTaskDragDrop.ts</code> に楽観的更新を統合</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; トースト通知コンポーネントを追加</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：楽観的更新付き useMutation</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/hooks/useUpdateTask.ts</span>
import { useMutation, useQueryClient } from '@tanstack/react-query';
import { api } from '@/lib/api';
import { toast } from '@/components/Toast';
import type { Task } from '@/types';

export function useUpdateTask(projectId: string) {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: { taskId: string; updates: Partial&lt;Task&gt; }) =&gt;
      api.patch(`/tasks/${data.taskId}`, data.updates),

    <span class="text-green-400">// 楽観的更新：APIレスポンス前にキャッシュを更新</span>
    onMutate: async (data) =&gt; {
      <span class="text-green-400">// 進行中のクエリをキャンセル（競合防止）</span>
      await queryClient.cancelQueries({
        queryKey: ['tasks', projectId],
      });

      <span class="text-green-400">// 現在のキャッシュを保存（ロールバック用）</span>
      const previousTasks = queryClient.getQueryData&lt;Task[]&gt;(
        ['tasks', projectId]
      );

      <span class="text-green-400">// キャッシュを即座に更新</span>
      queryClient.setQueryData&lt;Task[]&gt;(
        ['tasks', projectId],
        (old) =&gt; old?.map((task) =&gt;
          task.id === data.taskId
            ? { ...task, ...data.updates }
            : task
        ) ?? []
      );

      return { previousTasks };
    },

    <span class="text-green-400">// エラー時：保存した状態にロールバック</span>
    onError: (err, data, context) =&gt; {
      if (context?.previousTasks) {
        queryClient.setQueryData(
          ['tasks', projectId],
          context.previousTasks
        );
      }
      toast.error('タスクの更新に失敗しました');
    },

    <span class="text-green-400">// 完了時（成功/失敗問わず）：最新データを再取得</span>
    onSettled: () =&gt; {
      queryClient.invalidateQueries({
        queryKey: ['tasks', projectId],
      });
    },
  });
}</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">&#10003; 動作確認</h4>
                <ol class="space-y-1 text-sm list-decimal list-inside">
                    <li>タスクをドラッグ&ドロップし、即座にUIが更新されることを確認</li>
                    <li>DevToolsの Network タブを開き、API通信中もUIが先に反応していることを確認</li>
                    <li>バックエンドを停止した状態でタスクをドラッグし、エラー後に元の位置に戻ることを確認</li>
                    <li>エラー時にトースト通知が表示されることを確認</li>
                </ol>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-5 rounded">
                <h4 class="font-bold mb-2">注意点</h4>
                <ul class="space-y-1 text-sm">
                    <li>・<strong>cancelQueries</strong> を忘れると、古いデータで上書きされる競合が発生します</li>
                    <li>・<strong>WebSocketとの二重更新</strong> - 自分が操作したタスクのWebSocket通知は無視するロジックが必要です</li>
                    <li>・<strong>複数のmutation</strong> が同時に走る場合、onMutate で保存するキャッシュが古くなる可能性があります</li>
                </ul>
            </div>
        </section>

        <!-- ステップ4: チームメンバー招待機能 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ4：チームメンバー招待機能</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>プロジェクトにチームメンバーを招待する機能を実装してください。

【バックエンドAPI】
- POST /projects/{id}/invite
  - メールアドレスで招待（既存ユーザーは即追加、未登録は招待メール送信）
  - ロール指定（admin / member / viewer）
- GET /projects/{id}/members
  - メンバー一覧を取得（ロール、参加日を含む）
- DELETE /projects/{id}/members/{user_id}
  - メンバーを削除（adminのみ可）
- PATCH /projects/{id}/members/{user_id}
  - ロールを変更（adminのみ可）

【フロントエンド】
- メンバー管理モーダル（プロジェクト設定から開く）
- メールアドレス入力＋ロール選択の招待フォーム
- メンバー一覧（アバター、名前、ロール、参加日）
- ロール変更ドロップダウン
- メンバー削除（確認ダイアログ付き）

【権限制御】
- adminのみ招待・削除・ロール変更が可能
- memberはタスクのCRUDが可能
- viewerは閲覧のみ</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Claude Codeが行うこと</h3>
                <div class="space-y-2 text-sm">
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>backend/app/models/project_member.py</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>backend/app/api/members.py</code> を作成（APIエンドポイント）</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>backend/app/services/invite.py</code> を作成（招待ロジック）</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/members/MemberModal.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/members/InviteForm.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; <code>frontend/src/components/members/MemberList.tsx</code> を作成</div>
                    <div class="p-2 bg-gray-50 rounded">&#9745; DBマイグレーションファイルを生成</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：招待APIエンドポイント</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/app/api/members.py</span>
from fastapi import APIRouter, Depends, HTTPException
from app.models.project_member import ProjectMember, Role
from app.services.invite import InviteService
from app.auth.deps import get_current_user, require_admin

router = APIRouter()

@router.post("/projects/{project_id}/invite")
async def invite_member(
    project_id: str,
    invite: InviteRequest,
    current_user = Depends(require_admin),
    invite_service: InviteService = Depends(),
):
    """メンバーを招待"""
    result = await invite_service.invite(
        project_id=project_id,
        email=invite.email,
        role=invite.role,
        invited_by=current_user.id,
    )
    return result

@router.get("/projects/{project_id}/members")
async def list_members(
    project_id: str,
    current_user = Depends(get_current_user),
):
    """メンバー一覧を取得"""
    members = await ProjectMember.filter(
        project_id=project_id
    ).prefetch_related("user").all()

    return [
        {
            "id": m.user.id,
            "name": m.user.name,
            "email": m.user.email,
            "role": m.role,
            "joined_at": m.created_at,
        }
        for m in members
    ]

@router.delete("/projects/{project_id}/members/{user_id}")
async def remove_member(
    project_id: str,
    user_id: str,
    current_user = Depends(require_admin),
):
    """メンバーを削除"""
    if user_id == current_user.id:
        raise HTTPException(400, "自分自身は削除できません")
    deleted = await ProjectMember.filter(
        project_id=project_id, user_id=user_id
    ).delete()
    if not deleted:
        raise HTTPException(404, "メンバーが見つかりません")
    return {"message": "メンバーを削除しました"}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード：MemberList コンポーネント</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/components/members/MemberList.tsx</span>
import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { api } from '@/lib/api';
import type { Member, Role } from '@/types';

const ROLE_LABELS: Record&lt;Role, string&gt; = {
  admin: '管理者',
  member: 'メンバー',
  viewer: '閲覧者',
};

export function MemberList({
  projectId, isAdmin,
}: {
  projectId: string;
  isAdmin: boolean;
}) {
  const queryClient = useQueryClient();

  const { data: members = [] } = useQuery({
    queryKey: ['members', projectId],
    queryFn: () =&gt;
      api.get&lt;Member[]&gt;(`/projects/${projectId}/members`),
  });

  const removeMutation = useMutation({
    mutationFn: (userId: string) =&gt;
      api.delete(`/projects/${projectId}/members/${userId}`),
    onSuccess: () =&gt; {
      queryClient.invalidateQueries({
        queryKey: ['members', projectId],
      });
    },
  });

  return (
    &lt;div className="divide-y"&gt;
      {members.map((member) =&gt; (
        &lt;div key={member.id}
             className="flex items-center justify-between py-3"&gt;
          &lt;div className="flex items-center gap-3"&gt;
            &lt;div className="w-8 h-8 bg-purple-100
                            rounded-full flex items-center
                            justify-center text-sm font-bold
                            text-purple-600"&gt;
              {member.name[0]}
            &lt;/div&gt;
            &lt;div&gt;
              &lt;p className="font-medium"&gt;{member.name}&lt;/p&gt;
              &lt;p className="text-sm text-gray-500"&gt;
                {member.email}
              &lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div className="flex items-center gap-2"&gt;
            &lt;span className="text-sm px-2 py-1 bg-gray-100
                            rounded"&gt;
              {ROLE_LABELS[member.role]}
            &lt;/span&gt;
            {isAdmin &amp;&amp; member.role !== 'admin' &amp;&amp; (
              &lt;button
                onClick={() =&gt; removeMutation.mutate(member.id)}
                className="text-red-500 text-sm hover:underline"
              &gt;
                削除
              &lt;/button&gt;
            )}
          &lt;/div&gt;
        &lt;/div&gt;
      ))}
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-5 rounded mb-6">
                <h4 class="font-bold mb-2">&#10003; 動作確認</h4>
                <ol class="space-y-1 text-sm list-decimal list-inside">
                    <li>プロジェクト設定からメンバー管理モーダルを開く</li>
                    <li>メールアドレスを入力してメンバーを招待</li>
                    <li>招待されたユーザーがメンバー一覧に表示されることを確認</li>
                    <li>ロールの変更が正しく動作することを確認</li>
                    <li>メンバーの削除が確認ダイアログ付きで動作することを確認</li>
                    <li>viewer ロールのユーザーでログインし、タスクの編集ができないことを確認</li>
                    <li>member ロールのユーザーでログインし、招待・削除ができないことを確認</li>
                </ol>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-5 rounded">
                <h4 class="font-bold mb-2">注意点</h4>
                <ul class="space-y-1 text-sm">
                    <li>・<strong>自分自身の削除防止</strong> - adminが自分を削除するとプロジェクトが管理不能になります</li>
                    <li>・<strong>最後のadmin保護</strong> - プロジェクトに最低1人のadminが必要です</li>
                    <li>・<strong>フロントエンドの権限表示</strong> - APIの権限チェックだけでなく、UIでもボタンの表示/非表示を切り替えましょう</li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Phase 2 まとめ</h2>
            <div class="bg-purple-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-purple-600 mr-2">&#10003;</span><span><strong>ドラッグ&ドロップ</strong> - dnd-kitでカンバンボードの操作性を向上</span></li>
                    <li class="flex items-start"><span class="text-purple-600 mr-2">&#10003;</span><span><strong>リアルタイム同期</strong> - WebSocket + Redis Pub/Sub でチーム全体に即時反映</span></li>
                    <li class="flex items-start"><span class="text-purple-600 mr-2">&#10003;</span><span><strong>楽観的更新</strong> - TanStack Query の onMutate/onError パターンで瞬時のフィードバック</span></li>
                    <li class="flex items-start"><span class="text-purple-600 mr-2">&#10003;</span><span><strong>チーム管理</strong> - ロールベースのアクセス制御でセキュアなコラボレーション</span></li>
                </ul>
                <div class="mt-4 p-4 bg-white rounded-lg text-sm">
                    <p class="font-bold mb-2">Claude Codeの活用ポイント</p>
                    <ul class="space-y-1 text-gray-700">
                        <li>・複数ファイルにまたがる機能は、要件を明確にして一度に依頼する</li>
                        <li>・エラーが出たらそのまま貼り付けて修正を依頼する</li>
                        <li>・各機能の実装後にコミットし、問題があればロールバックできるようにする</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-impl1.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                実装フェーズ1
            </a>
            <a href="project-testing.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：テスト・CI/CD
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
