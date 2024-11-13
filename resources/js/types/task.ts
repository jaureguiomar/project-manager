import { Activity } from "./activity";
import { Checklist } from "./checklist";
import { Note } from "./note";
import { User } from "./user";

export interface TaskGlobal {
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
export interface TaskUser extends TaskGlobal {
   users: User[];
}
export interface TaskEverything {
   users: User[];
   checklists: Checklist[];
   notes: Note[];
   files: File[];
   activities: Activity[];
}
export interface TaskAll {
   name: string;
   tasks: TaskUser[];
}
