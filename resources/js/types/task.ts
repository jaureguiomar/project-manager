export interface Task {
   id: number;
   is_active: number;
   created: string;
   updated: string;
   name: string;
   description: string;
   start_date: string;
   due_date: string;
   section: string;
   section_board: string;
   is_done: number;
   done_date: string;
   is_archive: number;
   archive_date: string;
}
export interface TaskAll {
   name: string;
   tasks: Task[];
}
