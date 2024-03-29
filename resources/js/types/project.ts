import { TaskAll } from "./task";
import { File } from "./file";
import { Activity } from "./activity";
import { User } from "./user";

export interface Project {
   id: number;
   is_active: number;
   created: string;
   updated: string;
   name: string;
   description: string;
   users: User[];
}
export interface ProjectAll {
   id: number;
   is_active: number;
   created: string;
   updated: string;
   name: string;
   description: string;
   tasks: TaskAll[];
   files: File[];
   activities: Activity[];
   users: User[];
}
