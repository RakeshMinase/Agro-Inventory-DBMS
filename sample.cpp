#include<vector>

int main(){

}

bool isValidSudoku(vector<vector<char>>& board) {
        bool ans = true;
        map<int, int> temp;
        for(int i=0; i<9; i++){
            for(int j=0; j<9; j++){
                if(board[i][j] == '.'){
                    continue;
                }
                // cout<<3<<endl;
                if(temp[int(board[i][j])] > 0){
                    return false;
                }
                else{
                   temp[board[i][j]]++; 
                }
            }
            temp.clear();
        }
        // cout<<1<<endl;
        temp.clear();
        for(int i=0; i<3; i++){
            for(int j=3*i; j<(j+3); j++){
                for(int k=0; k<3; k++){
                    if(board[j][k] == '.'){
                        continue;
                    }
                    // cout<<2<<endl;
                    if(temp[int(board[j][k])] > 0){
                        return false;
                    }
                    else{
                        temp[board[j][k]]++; 
                    }
                }
                temp.clear();
            }
                // cout<<3<<endl;
                for(int j=3*i; j<(j+3); j++){
                    for(int k=3; k<6; k++){
                        cout<<k<<endl;
                        if(board[j][k] == '.'){
                        continue;
                    }
                    // cout<<"r"<<endl;
                    if(temp[int(board[j][k])] > 0){
                        ans = false;
                        return false;
                    }
                    else{
                        temp[board[j][k]]++; 
                    }
                }    
                temp.clear();
            }
                cout<<4<<endl;
                temp.clear();
            for(int j=3*i; j<(j+3); j++){
                for(int k=6; k<9; k++){
                    cout<<100<<endl;
                    if(board[j][k] == '.'){
                    continue;
                }
                
                if(temp[int(board[j][k])] > 0){
                    ans = false;
                    return false;
                }
                else{
                   temp[board[j][k]]++; 
                }
                }                
            }
                temp.clear();
            }
        
        return true;
    }